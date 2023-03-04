/***********************************************************************************************************/
/* message animation class                                                                                 */
/* animates dropdown messages and is used by  the Message component to handle server side messages and     */
/* also used for client side messages.                                                                     */
/********************************************************************************************************* */

export default class MessageAnimate {
 
    messageAnimation = async (statusAlert) => {
        document.querySelectorAll('.btn').forEach(b => b.disabled = true);
        await this.sleep(500);
        this.doAnimation(statusAlert, 'not-visible', 'visible');  
        await this.sleep(6000);
        this.doAnimation(statusAlert, 'visible', 'not-visible');  
        await this.sleep(500); 
        document.querySelectorAll('.btn').forEach(b => b.disabled = false);
    }

    doAnimation =  (statusAlert, removeClass, addClass) => { 
        statusAlert.classList.remove(removeClass);
        statusAlert.classList.add(addClass);     
    }

    sleep = async (timeDelay) => {
        return new Promise((resolve) => {
            let timeoutId = setTimeout(() => resolve(true), timeDelay);       
        })
    }
}