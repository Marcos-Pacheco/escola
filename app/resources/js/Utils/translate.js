import translation from '../../../lang/pt_BR.json';

export const _ = (message) => {
    if (message in translation) {
        return translation[message]
    } else {
        return message
    }
}