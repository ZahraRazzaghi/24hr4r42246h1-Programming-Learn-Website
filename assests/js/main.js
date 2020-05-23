/**
 * Created by Zahra Razzaghi on 04/30/2020.
 */
/*Start Email Login Page js Codes */
const inputs=document.querySelectorAll('.input');

function focusFunc() {
    Let parent=this.parentNode.parentNode;
    parent.classList.add('focus');
}

function blurFunc() {
    Let parent=this.parentNode.parentNode;
    if(this.value==""){
        parent.classList.remove('focus');
    }

}

inputs.forEach(input => {
   input.addEventListener('focus',focusFunc);
   input.addEventListener('blur',blurFunc);
});
/*End Email Login Page js Codes */
