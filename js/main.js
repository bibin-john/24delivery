
import { userEnums } from './modules/enums/enum.js';
import { sum } from './modules/utils/calcUtils.js';
import { getKey } from './modules/utils/commonUtils.js';


const user = 'Bibin'
const sayName = firstName => `Hello ${firstName}`;


console.log(sum(3, 7))
console.log(getKey(userEnums, 'User Name'))

export { user, sayName };