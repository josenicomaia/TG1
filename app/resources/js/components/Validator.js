import ValidatorJs from 'validatorjs';

class Validator {
    constructor(rules) {
        this.rules = rules;
        this._initialize();
    }

    _initialize = () => {
        this.errors = this._generateBaseErrors();
        this.result = true;
    }

    _generateBaseErrors = () => {
        const errors = {};

        for (const key of Object.keys(this.rules)) {
            errors[key] = [];
        }

        return errors;
    }

    validate = (data) => {
        const validator = new ValidatorJs(data, this.rules);
        validator.check();
        this.errors = Object.assign(this._generateBaseErrors(), validator.errors.all());
        this.result = validator.passes();
    }

    passes = (field) => {
        if (field) {
            return this.errors[field].length === 0;
        }

        return this.result;
    }

    fails = (field) => {
        return !this.passes(field);
    }
}

export default Validator;
