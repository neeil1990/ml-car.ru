import { Type, Tag, Dom, Text, Cache, Reflection } from 'main.core';
import { EventEmitter } from 'main.core.events';
import ItemNode from '../../item/item-node';
import Dialog from '../dialog';
import BaseStub from './base-stub';
import DefaultStub from './default-stub';
import BaseFooter from '../footer/base-footer';

import type { TabLabelState, TabLabelStates, TabOptions } from './tab-options';
import type { FooterContent, FooterOptions } from '../footer/footer-content';

/**
 * @memberof BX.UI.EntitySelector
 */
export default class Tab extends EventEmitter
{
	id: string = null;
	title: string = null;
	rootNode: ItemNode = null;

	dialog: Dialog = null;
	stub: BaseStub = null;

	visible: boolean = true;
	rendered: boolean = false;
	locked: boolean = false;
	selected: boolean = false;
	hovered: boolean = false;

	icon: TabLabelStates = {};
	textColor: TabLabelStates = {};
	bgColor: TabLabelStates = {};

	itemMaxDepth: number = 3;

	footer: BaseFooter = null;
	showDefaultFooter = true;
	cache = new Cache.MemoryCache();

	constructor(dialog: Dialog, tabOptions: TabOptions)
	{
		super();
		this.setEventNamespace('BX.UI.EntitySelector.Tab');

		const options: TabOptions = Type.isPlainObject(tabOptions) ? tabOptions : {};

		if (!Type.isStringFilled(options.id))
		{
			throw new Error('EntitySelector.Tab: "id" parameter is required.');
		}

		this.setDialog(dialog);
		this.id = options.id;
		this.showDefaultFooter = options.showDefaultFooter !== false;

		this.rootNode = new ItemNode(null, { itemOrder: options.itemOrder });
		this.rootNode.setTab(this);

		this.setVisible(options.visible);
		this.setTitle(options.title);
		this.setItemMaxDepth(options.itemMaxDepth);
		this.setIcon(options.icon);
		this.setTextColor(options.textColor);
		this.setBgColor(options.bgColor);
		this.setStub(options.stub, options.stubOptions);
		this.setFooter(options.footer, options.footerOptions);
	}

	getId(): string
	{
		return this.id;
	}

	/**
	 * @internal
	 */
	setDialog(dialog: Dialog): void
	{
		this.dialog = dialog;
	}

	getDialog(): Dialog
	{
		return this.dialog;
	}

	getStub(): ?BaseStub
	{
		return this.stub;
	}

	setStub(stub?: boolean | string, stubOptions?: { [option: string]: any }): void
	{
		let instance = null;
		const options = Type.isPlainObject(stubOptions) ? stubOptions : {};

		if (Type.isString(stub))
		{
			const className = Reflection.getClass(stub);
			if (Type.isFunction(className))
			{
				instance = new className(this, options);
				if (!(instance instanceof BaseStub))
				{
					console.error('EntitySelector: stub is not an instance of BaseStub.');
					instance = null;
				}
			}
		}

		if (!instance && stub !== false)
		{
			instance = new DefaultStub(this, options);
		}

		this.stub = instance;
	}

	getFooter(): ?BaseFooter
	{
		return this.footer;
	}

	setFooter(footerContent: ?FooterContent, footerOptions?: FooterOptions)
	{
		/** @var {BaseFooter} */
		let footer = null;
		if (footerContent !== null)
		{
			footer = Dialog.createFooter(this, footerContent, footerOptions);
			if (footer === null)
			{
				return;
			}
		}

		if (this.isRendered() && this.getFooter() !== null)
		{
			Dom.remove(this.getFooter().getContainer());
			this.getDialog().adjustFooter();
		}

		this.footer = footer;

		if (this.isRendered())
		{
			this.getDialog().appendFooter(footer);
			this.getDialog().adjustFooter();
		}
	}

	canShowDefaultFooter(): boolean
	{
		return this.showDefaultFooter;
	}

	enableDefaultFooter(): void
	{
		this.showDefaultFooter = true;
		this.getDialog().adjustFooter();
	}

	disableDefaultFooter(): void
	{
		this.showDefaultFooter = false;
		this.getDialog().adjustFooter();
	}

	getRootNode(): ItemNode
	{
		return this.rootNode;
	}

	setTitle(title: string): void
	{
		if (Type.isStringFilled(title))
		{
			this.title = title;

			if (this.isRendered())
			{
				this.getTitleContainer().textContent = title;
			}
		}
	}

	getTitle(): ?string
	{
		return this.title;
	}

	setIcon(icon: TabLabelStates | string): void
	{
		return this.setProperty('icon', icon);
	}

	getIcon(state?: TabLabelState): ?string
	{
		return this.getPropertyByState('icon', state);
	}

	setBgColor(bgColor: TabLabelStates | string): void
	{
		return this.setProperty('bgColor', bgColor);
	}

	getBgColor(state?: TabLabelState): ?string
	{
		return this.getPropertyByState('bgColor', state);
	}

	setTextColor(textColor: TabLabelStates | string): void
	{
		return this.setProperty('textColor', textColor);
	}

	getTextColor(state?: TabLabelState): ?string
	{
		return this.getPropertyByState('textColor', state);
	}

	setProperty(name: string, states: TabLabelStates | string): void
	{
		const property = this[name];
		if (!property)
		{
			return;
		}

		if (Type.isPlainObject(states))
		{
			Object.keys(states).forEach(state => {
				if (Type.isStringFilled(states[state]))
				{
					property[state] = states[state];
				}
			});
		}
		else if (Type.isStringFilled(states))
		{
			property['default'] = states;
		}
	}

	/**
	 * @private
	 */
	getPropertyByState(name: string, state?: TabLabelState): ?string
	{
		const property = this[name];
		const labelState = Type.isStringFilled(state) ? state : 'default';

		if (!Type.isUndefined(property) && !Type.isUndefined(property[labelState]))
		{
			return property[labelState];
		}

		return null;
	}

	getPropertyByCurrentState(name: string): ?string
	{
		const property = this[name];
		if (this.isSelected() && this.isHovered() && property.selectedHovered)
		{
			return property.selectedHovered;
		}
		else if (this.isSelected() && property.selected)
		{
			return property.selected;
		}
		else if (this.isHovered() && property.hovered)
		{
			return property.hovered;
		}
		else if (property.default)
		{
			return property.default;
		}

		return null;
	}

	setItemMaxDepth(depth: number): void
	{
		if (Type.isNumber(depth) && depth > 0)
		{
			this.itemMaxDepth = depth;
		}
	}

	getItemMaxDepth(): number
	{
		return this.itemMaxDepth;
	}

	getContainer(): HTMLElement
	{
		return this.cache.remember('container', () => {
			return Tag.render`
				<div class="ui-selector-tab-content">${this.getItemsContainer()}</div>
			`;
		});
	}

	getLabelContainer(): HTMLElement
	{
		return this.cache.remember('label', () => {
			const className = this.isVisible() ? '' : ' ui-selector-tab-label-hidden';
			return Tag.render`
				<div 
					class="ui-selector-tab-label${className}" 
					onclick="${this.handleLabelClick.bind(this)}"
					onmouseenter="${this.handleLabelMouseEnter.bind(this)}"
					onmouseleave="${this.handleLabelMouseLeave.bind(this)}"
				>
					${this.getIconContainer()}
					${this.getTitleContainer()}
				</div>
			`;
		});
	}

	getIconContainer(): HTMLElement
	{
		return this.cache.remember('icon', () => {
			return Tag.render`
				<div class="ui-selector-tab-icon"></div>
			`;
		});
	}

	getTitleContainer(): HTMLElement
	{
		return this.cache.remember('title', () => {
			return Tag.render`
				<div class="ui-selector-tab-title">${Text.encode(this.getTitle())}</div>
			`;
		});
	}

	getItemsContainer(): HTMLElement
	{
		return this.cache.remember('items', () => {
			return Tag.render`
				<div class="ui-selector-items"></div>
			`;
		});
	}

	render(): void
	{
		this.getRootNode().render();
		this.rendered = true;
	}

	renderLabel(): void
	{
		Dom.style(this.getTitleContainer(), 'color', this.getPropertyByCurrentState('textColor'));
		Dom.style(this.getLabelContainer(), 'background-color', this.getPropertyByCurrentState('bgColor'));

		const icon = this.getPropertyByCurrentState('icon');
		Dom.style(this.getIconContainer(), 'background-image', icon ? `url('${icon}')` : null);
	}

	isVisible(): boolean
	{
		return this.visible;
	}

	setVisible(flag: boolean): void
	{
		if (Type.isBoolean(flag))
		{
			this.visible = flag;

			if (this.isRendered())
			{
				if (this.visible)
				{
					Dom.remove(this.getLabelContainer(), 'ui-selector-tab-label-hidden');
				}
				else
				{
					Dom.addClass(this.getLabelContainer(), 'ui-selector-tab-label-hidden');
				}
			}
		}
	}

	isRendered(): boolean
	{
		return this.rendered && this.getDialog() && this.getDialog().isRendered();
	}

	select(): void
	{
		if (this.isSelected())
		{
			return;
		}

		Dom.addClass(this.getContainer(), 'ui-selector-tab-content-active');
		if (this.isVisible())
		{
			Dom.addClass(this.getLabelContainer(), 'ui-selector-tab-label-active');
			this.renderLabel();
		}

		this.getDialog().emit('Tab:onSelect', { tab: this });
		this.selected = true;

		if (this.isVisible())
		{
			this.renderLabel();
		}

		if (this.getFooter())
		{
			this.getFooter().show();
		}
	}

	deselect(): void
	{
		if (!this.isSelected())
		{
			return;
		}

		Dom.removeClass(this.getContainer(), 'ui-selector-tab-content-active');
		if (this.isVisible())
		{
			Dom.removeClass(this.getLabelContainer(), 'ui-selector-tab-label-active');
		}

		this.getDialog().emit('Tab:onDeselect', { tab: this	 });
		this.selected = false;

		if (this.isVisible())
		{
			this.renderLabel();
		}

		if (this.getFooter())
		{
			this.getFooter().hide();
		}
	}

	hover(): void
	{
		if (this.isHovered())
		{
			return;
		}

		Dom.addClass(this.getLabelContainer(), 'ui-selector-tab-label-hover');
		this.hovered = true;

		this.renderLabel();
	}

	unhover(): void
	{
		if (!this.isHovered())
		{
			return;
		}

		Dom.removeClass(this.getLabelContainer(), 'ui-selector-tab-label-hover');
		this.hovered = false;

		this.renderLabel();
	}

	isSelected(): boolean
	{
		return this.selected;
	}

	isHovered(): boolean
	{
		return this.hovered;
	}

	lock(): void
	{
		this.locked = true;
		Dom.addClass(this.getContainer(), 'ui-selector-tab-content-locked');
	}

	unlock(): void
	{
		this.locked = false;
		Dom.removeClass(this.getContainer(), 'ui-selector-tab-content-locked');
	}

	isLocked(): boolean
	{
		return this.locked;
	}

	handleLabelClick(): void
	{
		this.getDialog().selectTab(this.getId());
	}

	handleLabelMouseEnter(): void
	{
		this.hover();
	}

	handleLabelMouseLeave(): void
	{
		this.unhover();
	}
}