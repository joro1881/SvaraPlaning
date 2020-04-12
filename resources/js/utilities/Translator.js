export class Translator {
    /**
     * Create a new Translator instance.
     *
     * @param {object} data
     */
    constructor(data) {
        this.originalData = data;
    }


    /**
     * Translate the given keyword
     */
    l(keyword) {
        return this.originalData[keyword] || keyword;
    }

    v(message, attribute, parameters = {}) {
        message = this.l(message);
        for (let key in parameters) {
            message = message.replace(':' + key, parameters[key]);
        }
        return message.replace(':attribute', attribute);
    }

}

export default Translator;
