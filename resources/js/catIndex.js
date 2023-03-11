export default class CatIndex {
    // used to get name for delete confirmation message
    static getNameFromEvent(event) {   
        return event.target.dataset.name;
    } 
}