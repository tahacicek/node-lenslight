const BLACKLISTED_KEY_CODES = [38];
const COMMANDS = {
    execute:
        "<span class='winter'>Winter :</span> Executing order 69<br/>If you would like to see what i can do, then<br/> login in with your username and password",
    help:
        'Supported commands: <span class="code">login</span>, <span class="code">about</span>, <span class="code">skills</span>, <span class="code">yah</span>',
    hi:
        "<span class='winter'>Winter</span> Hello, my name is Winter 😄<br/>If you would like to see what i can do, then<br/> login in with your username and password",
    login:
        "<span class='winter'>Winter</span> type username to login",
    alien:
        "<span class='winter'>Winter</span> type password to login",
    admin123:
        "<span class='winter'>Winter</span> login successful<br/>Welcome back Alien 😇",
    about:
        "<span class='winter'>Winter</span> Hello",
    skills:
        "<span class='winter'>Winter</span> yah",
    yah:
        "<span class='winter'>Winter</span> yeet",
    cls:
        `<div class="terminal-line"></div>`,
    language:
        `<span class='winter'>Winter :</span> Input <span class="code">backend</span>, <span class="code">frontend</span>, <span class="code">skills</span>, <span class="code">yah</span>`,
    backend:
        `<span class='winter'>Winter :</span> Input <span class="code">php</span>, <span class="code">laravel</span>, <span class="code">nodejs</span>, <span class="code">express</span>, <span class="code">python</span>, <span class="code">django</span>, <span class="code">java</span>, <span class="code">spring</span>, <span class="code">c</span>, <span class="code">c++</span>, <span class="code">c#</span>, <span class="code">go</span>, <span class="code">ruby</span>, <span class="code">rails</span>, <span class="code">swift</span>, <span class="code">kotlin</span>, <span class="code">flutter</span>, <span class="code">react</span>, <span class="code">vue</span>, <span class="code">angular</span>, <span class="code">html</span>, <span class="code">css</span>, <span class="code">javascript</span>, <span class="code">jquery</span>, <span class="code">bootstrap</span>, <span class="code">tailwind</span>, <span class="code">sass</span>, <span class="code">less</span>, <span class="code">scss</span>, <span class="code">wordpress</span>, <span class="code">drupal</span>, <span class="code">joomla</span>, <span class="code">magento</span>, <span class="code">opencart</span>, <span class="code">prestashop</span>, <span class="code">shopify</span>, <span class="code">laravel</span>, <span class="code">codeigniter</span>, <span class="code">yii</span>, <span class="code">symfony</span>, <span class="code">cakephp</span>, <span class="code">zend</span>, <span class="code">fuelphp</span>, <span class="code">phalcon</span>, <span class="code">kohana</span>, <span class="code">lumen</span>, <span class="code">
    </span>, <span class="code">express</span>, <span class="code">django</span>, <span class="code">spring</span>, <span class="code">ruby</span>, <span class="code">rails</span>, <span class="code">swift</span>, <span class="code">kotlin</span>, <span class="code">flutter</span>, <span class="code">react</span>, <span class="code">vue</span>, <span class="code">angular</span>, <span class="code">html</span>, <span class="code">css</span>, <span class="code">javascript</span>, <span class="code">jquery</span>, <span class="code">bootstrap</span>, <span class="code">tailwind</span>, <span class="code">sass</span>, <span class="code">less</span>, <span class="code">scss</span>, <span class="code">wordpress</span>, <span class="code">drupal</span>, <span class="code">joomla</span>, <span class="code">magento</span>, <span class="code">opencart</span>, <span class="code">prestashop</span>, <span class="code">shopify</span>, <span class="code">laravel</span>, <span class="code">codeigniter</span>, <span class="code">yii</span>, <span class="code">symfony</span>, <span class="code">cakephp</span>, <span class="code">zend</span>, <span class="code">fuelphp</span>, <span class="code">phalcon</span>, <span class="code">kohana</span>, <span class="code">lumen</span>, <span class="code">laravel</span>, <span class="code">codeigniter</span>, <span class="code">yii</span>, <span class="code">symfony</span>, <span class="code">cakephp</span>, <span class="code">zend</span>, <span class="code">fuelphp</span>, <span class="code">phalcon</span>, <span class="code">kohana</span>, <span class="code">lumen</span
    >`,
    frontend:
        `<span class='winter'>Winter :</span> Input <span class="code">html</span>, <span class="code">css</span>, <span class="code">javascript</span>, <span class="code">jquery</span>, <span class="code">bootstrap</span>, <span class="code">tailwind</span>, <span class="code">sass</span>, <span class="code">less</span>, <span class="code">scss</span>, <span class="code">wordpress</span>, <span class="code">drupal</span>, <span class="code">joomla</span>, <span class="code">magento</span>, <span class="code">opencart</span>, <span class="code">prestashop</span>, <span class="code">shopify</span>, <span class="code">laravel</span>, <span class="code">codeigniter</span>, <span class="code">yii</span>, <span class="code">symfony</span>, <span class="code">cakephp</span>, <span class="code">zend</span>, <span class="code">fuelphp</span>, <span class="code">phalcon</span>, <span class="code">kohana</span>, <span class="code">lumen</span>, <span class="code">laravel</span>, <span class="code">codeigniter</span>, <span class="code">yii</span>, <span class="code">symfony</span>, <span class="code">cakephp</span>, <span class="code">zend</span>, <span class="code">fuelphp</span>, <span class="code">phalcon</span>, <span class="code">kohana</span>, <span class="code">lumen</span>, <span class="code">laravel</span>, <span class="code">codeigniter</span>, <span class="code">yii</span>, <span class="code">symfony</span>, <span class="code">cakephp</span>, <span class="code">zend</span>, <span class="code">fuelphp</span>, <span class="code">phalcon</span>, <span class="code">kohana</span>, <span class="
    code">lumen</span
    >`,

    contact:
        ``,
};

let userInput, terminalOutput;
//if commands cls is executed, clear terminal


const app = () => {
    userInput = document.getElementById("userInput");
    terminalOutput = document.getElementById("terminalOutput");
    document.getElementById("dummyKeyboard").focus();
    console.log("Application loaded");
    const [ theme, setTheme ] = React.useState('dark')
	const themeVars = theme === 'dark' ? {
		app: {backgroundColor: '#333444'},
		terminal: {boxShadow: '0 2px 5px #111'},
		window: {backgroundColor: '#222345', color: '#F4F4F4'},
		field: {backgroundColor: '#222333', color: '#F4F4F4', fontWeight: 'normal'},
		cursor: {animation : '1.02s blink-dark step-end infinite'}
	} : {
		app: {backgroundColor: '#ACA9BB'},
		terminal: {boxShadow: '0 2px 5px #33333375'},
		window: {backgroundColor: '#5F5C6D', color: '#E3E3E3'},
		field: {backgroundColor: '#E3E3E3', color: '#474554', fontWeight: 'bold'},
		cursor: {animation : '1.02s blink-light step-end infinite'}
	}


};

const execute = function executeCommand(input) {
    let output;
    input = input.toLowerCase();
    if (input.length === 0) {
        return;
    }
    welcome_text = `<div class="terminal-line break">
  <span class="help-msg">Welcome to Winter — Type <span class="code">help</span> for a list of commands. Or web site buttons on the next line.</span>
</div>`;
    output = `<div class="terminal-line"><span class="success">Guest</span> <span class="directory">~</span> ${input}</div>`;
    output2 = `<div class="terminal-line"><span class="success">Winter</span> <span class="directory">~</span>                                     </div>`;
    output3 = `<div class="terminal-line"><span class="success">Winter</span> <span class="directory">~</span><textarea class="dummy-keyboard" name="" id="dummyKeyboard" rows="3"></textarea></div>`;
    if (!COMMANDS.hasOwnProperty(input)) {
        output += `<div class="terminal-line">no such command: ${input}</div>`;
        console.log("Oops! no such command");
    } else {
        output += COMMANDS[input];
    }

    if (input == "cls") {
        terminalOutput.innerHTML = welcome_text + `<div class="terminal-line"></div>`;
        return;
    }

    //if input is contact, then show contact-form id and hide terminal with animation
    if (input == "contact") {
        $("#contact-form").show();
        $("#terminal").hide();
        return;
    }

    //if click #back then show terminal and hide contact-form with animation
            document.getElementById("back").onclick = function () {
                document.getElementById("contact-form").style.display = "none";
                document.getElementById("terminal").style.display = "block";
                return;
            };


 // if (input == "contact") {
    //     document.getElementById("form-contact").style.display = "block";
    //     document.getElementById("terminal").style.display = "none";
    //     //delay
    //     return;
    // }



    terminalOutput.innerHTML = `${terminalOutput.innerHTML
        }<div class="terminal-line">${output}</div>`;
    terminalOutput.scrollTop = terminalOutput.scrollHeight;
};

const key = function keyEvent(e) {
    const input = userInput.innerHTML;

    if (BLACKLISTED_KEY_CODES.includes(e.keyCode)) {
        return;
    }

    if (e.key === "Enter") {
        execute(input);
        userInput.innerHTML = "";
        return;
    }

    userInput.innerHTML = input + e.key;
};

const backspace = function backSpaceKeyEvent(e) {
    if (e.keyCode !== 8 && e.keyCode !== 46) {
        return;
    }
    userInput.innerHTML = userInput.innerHTML.slice(
        0,
        userInput.innerHTML.length - 1
    );
};

document.addEventListener("keydown", backspace);
document.addEventListener("keypress", key);
document.addEventListener("DOMContentLoaded", app);

// Credits: http://blog.vishalon.net/index.php/javascript-getting-and-setting-caret-position-in-textarea/
function setCaretPosition(ctrl, pos) {
    // Modern browsers
    if (ctrl.setSelectionRange) {
        ctrl.focus();
        ctrl.setSelectionRange(pos, pos);

        // IE8 and below
    } else if (ctrl.createTextRange) {
        var range = ctrl.createTextRange();
        range.collapse(true);
        range.moveEnd('character', pos);
        range.moveStart('character', pos);
        range.select();
    }
}

// Set the cursor position of the "#test-input" element to the end when the page loads
var input = document.getElementById('dummyKeyboard');
setCaretPosition(input, input.value.length);


const spnText = document.querySelector('.text');
const spnCursor = document.querySelector('.cursor');
const txt = 'Or web site buttons on the next line.';

// Parametry
let indexText = 0;
const time = 40;

// Implementacja
const addLetter = () => {
    spnText.textContent += txt[indexText];
    indexText++;
    if (indexText === txt.length) clearInterval(indexTyping);
}

const cursorAnimation = () => {
    spnCursor.classList.toggle('active');
}

const indexTyping = setInterval(addLetter, time);
setInterval(cursorAnimation, 200);




