/******************************************************/
/* date helper functions                              */
/******************************************************/

const textMonths = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']

//converts input  date from d M YYYY format to YYYY-MM=DD
export const dispDateToYYYYMMDD = (dispDate) => { 
  
    if (!dispDate) {     
        return null;
    }

    const dispDateArray = dispDate.split(' '); 

    const mthIdx = textMonths.findIndex( m => m === dispDateArray[1]) + 1;

    const mm = mthIdx.toString().padStart(2, 0);
    const dd = dispDateArray[0].padStart(2, '0');

    return `${dispDateArray[2]}-${mm}-${dd}`;
}