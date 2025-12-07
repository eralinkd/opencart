if (!customElements.get('ui-input')) {
  class UIInput extends HTMLElement {
    constructor() {
      super();

      const template = document.getElementById('ui-input-template');
      if (!template) {
        console.error('Template "ui-input-template" not found');
        return;
      }

      const shadowRoot = this.attachShadow({ mode: 'open' });
      shadowRoot.appendChild(template.content.cloneNode(true));

      this.input = shadowRoot.querySelector('input');
      this.labelSlot = shadowRoot.querySelector('slot[name="label"]');
      this.helperSlot = shadowRoot.querySelector('slot[name="helper"]');

      this.handleInput = this.handleInput.bind(this);
      this.handleChange = this.handleChange.bind(this);
    }

    static get observedAttributes() {
      return ['label', 'placeholder', 'value', 'type', 'disabled', 'name', 'helper'];
    }

    attributeChangedCallback(name, oldValue, newValue) {
      if (oldValue === newValue) {
        return;
      }

      this.updateInput();
    }

    connectedCallback() {
      this.updateInput();
      this.setupEventListeners();
    }

    disconnectedCallback() {
      if (!this.input) {
        return;
      }

      this.input.removeEventListener('input', this.handleInput);
      this.input.removeEventListener('change', this.handleChange);
    }

    setupEventListeners() {
      if (!this.input) {
        return;
      }

      this.input.addEventListener('input', this.handleInput);
      this.input.addEventListener('change', this.handleChange);
    }

    handleInput(event) {
      if (!this.input) {
        return;
      }

      const currentValue = this.input.value;
      if (this.getAttribute('value') !== currentValue) {
        this.setAttribute('value', currentValue);
      }

      this.dispatchEvent(new CustomEvent('ui-input', {
        detail: { value: currentValue, originalEvent: event },
        bubbles: true,
        composed: true
      }));

      this.dispatchEvent(new Event('input', { bubbles: true, composed: true }));
    }

    handleChange(event) {
      if (!this.input) {
        return;
      }

      this.dispatchEvent(new CustomEvent('ui-input-change', {
        detail: { value: this.input.value, originalEvent: event },
        bubbles: true,
        composed: true
      }));

      this.dispatchEvent(new Event('change', { bubbles: true, composed: true }));
    }

    updateInput() {
      if (!this.input) {
        return;
      }

      const type = this.getAttribute('type') || 'text';
      this.input.type = type;

      const placeholder = this.getAttribute('placeholder') || '';
      this.input.placeholder = placeholder;

      if (this.hasAttribute('value')) {
        const value = this.getAttribute('value') ?? '';
        if (this.input.value !== value) {
          this.input.value = value;
        }
      }

      if (this.hasAttribute('disabled')) {
        this.input.disabled = true;
        this.setAttribute('aria-disabled', 'true');
      } else {
        this.input.disabled = false;
        this.removeAttribute('aria-disabled');
      }

      this.input.required = this.hasAttribute('required');

      const name = this.getAttribute('name');
      if (name) {
        this.input.name = name;
      }

      const label = this.getAttribute('label');
      if (label && this.labelSlot && !this.labelSlot.assignedNodes().length) {
        this.labelSlot.textContent = label;
      }

      const helper = this.getAttribute('helper');
      if (helper && this.helperSlot && !this.helperSlot.assignedNodes().length) {
        this.helperSlot.textContent = helper;
      }
    }
  }

  customElements.define('ui-input', UIInput);
}

