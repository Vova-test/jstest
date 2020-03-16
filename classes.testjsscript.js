class SmartSelects {

    constructor() {

        this.selectedColors = [];
    }
    
    setSelector(className) {

        this.className = className;
    }

    setOptions(options) {

        this.options = options;
    }

    setDefaultValue(val) {

        this.val = val;
    }

    toggleOptions(item, dis) {

        let disable = document.querySelectorAll(`option[value=${item}]`);

        for (let i = 0; i < disable.length; i++) {

            disable[i].disabled = dis;
        }
    }

    onSelect(el) {
        this.toggleOptions(el.target.value, true);

        let newColors = [];
        let selectedOptions = document.querySelectorAll('option:checked');

        for (let i = 0; i < selectedOptions.length; i++) {
            newColors.push(selectedOptions[i].value);
        }

        let difference = this.selectedColors.filter(x => !newColors.includes(x));

        this.toggleOptions(difference[0], false);
        
        this.selectedColors = newColors; 
    }

    init() {

        let selector = document.querySelectorAll(this.className);

        let colors = this.options;

        for (let i = 0; i < selector.length; i++) { 

            let option = document.createElement('option');                 
            selector[i].append(option);

            selector[i].onchange = this.onSelect.bind(this);
            option.text = this.val;
            option.value = this.val;

            for (let color in colors) {

                let option = document.createElement('option');                 
                selector[i].append(скуфеуваіаа(рою пр));
            }
        }
    }
}