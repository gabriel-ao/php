document.getElementsByTagName("body")[0].onload = function () {
    setupFunctions();
}

//Variable types
//primitives:

var isAGoodDayToLearnJavascript = true; //bolean
var loopNum = 0; //numeric - integers and doubles
var myname = "Gabriel" //strings

//Complex:
var itemsInBackPack = ["Pencil", "Paper", "Book"]; //Array
//This can also be written as 'new Array("pencil","paper","book");

//how to loop trough an array
for (item in itemsInBackPack) {
    document.writeln("We  have an item in our backpack " + itemsInBackPack[item] + "<br>");
}

//object:
var person = {
    name: "Gabriel",
    height: 71,
    hairColor: "Brown",
    favoriteFood: "Pizza"
};

person.favoriteFood = "Lasagna";
person['favoriteFood']; // return Lasagna

var myVariable = "name";
person[myVariable]; // return Gabriel

//operators (what yo ucan do with variavles:
// + -> addition or join. 7+7 = 14, "blue"+"sky" = "bluesky"
// - -> Subtration. 7-4 = 3. "blue"-"sky" = error
// * -> multiplation. 3*4 = 12
// ^ -> to the power of: 2^4 = 16
// / ->division. 12/4 = 3.
// % ->Modulus (division remainder). 10%3 = 1
// ++ increment by 1. 4++ = 5
// -- decrement by 1. 4-- = 3

x = 1; //X is equal to 1;
y = x; // y = 2 because x = 1;
x == y; // X is 1, Y is 2; so return is FALSE;
if (x == y) {
    //X is equal to Y
} else {
    //X is not equal to Y
}

if (!isAGoodDayToLearnJavascript) {
    alert("Why not?!")
}

if (x != y) {
    // do something
} else {
    // do something else
}

// == -> Comparasion. check to see if two things are equal.
//                          var x = 1;
//                          x == 2; //this returns false
//                          x == 1; //this returns true
// ! -> not. This reversed a true or false value.
// != -> comparision - not equal to....
//                          x != 2; //this returns true
//                          x != 1; //this returns false
// > -> Comparision - greater than.
//                          1 > 2; //this returns false
//                          8 > 5; //this returns true
// < -> comparision - less than. opposite of greater than.
// <= and >= Comparision. Less than or equal to; greater than or equal to.
// && -> and operator. If this and this. returns true if both conditions are
//                            2 > 1 && > 4; //this returns true
// || -> Or operator. returns true if either of the conditions are true.
// () -> A way to group any set of statements
//                          (2 * (4 + 6)); //this returns 20
//                          ((2 * 4) + 6); //this returns 14
// ==== -> Equality byt checks to make sure the variable type is also the same

function someFunction() {
    var pizza = "Delicious";
    if (person.favoriteFood == "pizza") {
        alert("We have four favorite food ");
    }
    /* All the code in here is ONLY iniside this function
    it can read global variavles (ones declared outside ofa function) but
    it cannot create new global variables.
    */
}

function addTen(myNum) {
    var pizza = "ehh ok";
    return myNum + 10;
}

var myNumber = 5;
someFunctionWithParameters("I just set my number to " + myNumber + "<br>");
myNumber = addTen(myNumber);
someFunctionWithParameters("I just set my number to " + myNumber + "<br>");
someFunctionWithParameters("I just set my number to " + myNumber + "<br>");

function someFunctionWithParameters(someValue) {
    /* this function has single parameter, which lets you pass a value
    and the funciton will do something with that value. */
    document.writeln(someValue)
}

//the DOM -> document object model. the DOM lets you change any aspect of
//an HTML document. you can edit tags, attributes, CSS, HTML, and events.

//there are multiple ways to select an HTML element:
//      getElementById
//      getElementByTagName
//      getElementByClassName
//      getElementBy



function setupFunctions() {
    var elem = document.getElementById("basic_text");
    elem.style.color = "rgba(60,60,255,1)";
    elem.style.fontSize = "32px";
    //You can also edit the .innerHTML
    elem.innerHTML = "This replace all the content of the div"
    //You can access an attribute such as the href of an <a tag using .getAttriute
    //document.getElementById("some_link").getAttribute("href");
    //settings the values are the same, use .setAttribute("value");
    //pega conteudo dentro da div
    var elem1 = document.getElementById("basic_text").innerHTML;

    //chega tamanho do conteudo
    if (elem1.length >= 8) {
        alert("Maior que 8");
    } else {
        alert("Menor que 8");
    }

    var links = document.getElementsByTagName("a");
    var output = "";
    for (i = 0; i < links.length; i++) {
        var links_address = links[i].getAttribute("href");
        output = output + "have a link " + i + " with thre href: " + links_address + "<br>";

    }
    displayToMessageContainer(output);
}

function displayToMessageContainer(text) {
    document.getElementById("message_container").innerHTML = text;
}

// DOM events: (For a full list see in W3Schools DOM_OBJ_EVENTS)
//          blur -> when focus is taken off an element. for example when a user
//                  clicks away from an element or presses tab.
//          change -> when the value of a form element changes
//          cut/copy/paste -> when a user performs a cut/copyor paste action in a
//          click -> when a user cicks on an element
//          dblick -> when a use double clicks an element
//          focus -> when focus is fiven to an element (when it is selected)
//          keydown -> when a user pressing a key
//          keypress -> when a  user presses a key
//          keyup -> when a user releases a key
//          load -> when a element`s content is done loading
//          mouseover -> when a user`s pointer goes over an element
//          scroll -> when the user scrolls a document
//          submit -> when a form is submitted
//          touchstart, touchmove, touchend -> when a user uses touch-screen
//
// you can update an event 3 ways
// in html:
//         <element onclick="yourFunctions();"/>
// in javascript:
//      yourElement.onclick= function() {yourFunction();};
//      yourElement.addEventListener("click", function() { yourFunction();});
// all of then are correct, but i prefer using addeventlistener.

var button1 = document.getElementById("button1");
var button2 = document.getElementById("button2");
var button3 = document.getElementById("button3");

button1.addEventListener("click", function () {
    displayToMessageContainer("Button 1 was clicked");
})

button2.addEventListener("click", function () {
    displayToMessageContainer("Button 2 was clicked");
})
button3.addEventListener("click", function () {
    displayToMessageContainer("Button 3 was clicked <br> Cookies: " + document.cookie);
})

var tellmebutton = document.getElementById("tell_me_about_people");
tellmebutton.addEventListener("click", function () {
    var randomperson = people[Math.floor(Math.random() * people.length)];
    displayToMessageContainer(randomperson.tellMeAbout());
})

function Person(name, height, hairColor, favoriteFood) {
    this.name = name;
    this.height = height;
    this.hairColor = hairColor;
    this.favoriteFood = favoriteFood;
    this.tellMeAbout = function () {
        return "Meet " + this.name + " they like " + this.favoriteFood + " and have " + this.hairColor + " hair";
    }
}

var bob = new Person("bob", 65, "blond", "Paprika");
var mary = new Person("Mary", 66, "red", "Apples");
var anaya = new Person("Anaya", 62, "balck", "figs");
var people = [bob, mary, anaya];


/* Definicao de senha forte ou fraca */
var forca = 0;
var RegrasLetrasMa = /[A-Z]/;
var RegrasLetrasMi = /[a-z]/;
var RegrasNumero = /[0-9]/;
var RegrasEspecial = /[~!@#$%^&*()_+]/;

var LetraMa = false;
var LetraMi = false;
var LetraNum = false;
var LetraEspecial = false;
var LetraLength = false;

var changeStyle = function (element, boolean) {
    if (boolean === true) {
        document.getElementById(element).style = "color: black";
    } else {
        document.getElementById(element).style = "color: red";
    }
}

var mostrarSenha = document.getElementById("senha").addEventListener("keyup", function () {
    var campoDigitacao = document.getElementById("senha").value;
    var campoSaida = document.getElementById("ver_senha").value = campoDigitacao;

    if (campoDigitacao.length >= 8){
         changeStyle("senha_caracter", true);
         LetraLength = true; 
        }else { 
         changeStyle("senha_caracter", false);
         LetraLength = false;
        }
    if (RegrasNumero.exec(campoDigitacao)){
        changeStyle("senha_number", true);
        LetraNum = true; 
        }else { 
        changeStyle("senha_number", false);
        LetraNum = false;
    }
    if (RegrasLetrasMa.exec(campoDigitacao)) {
        changeStyle("senha_ma", true);
        LetraMa = true;
    }else{
        changeStyle("senha_ma", false);
        LetraMa = false;
    }
    if (RegrasLetrasMi.exec(campoDigitacao)) {
        changeStyle("senha_mi", true);
        LetraMi = true;
    }else{
        changeStyle("senha_mi", false);
        LetraMi = false;
    }
    if (RegrasEspecial.exec(campoDigitacao)) {
        changeStyle("senha_especial", true);
        LetraEspecial = true;
    }else{
        changeStyle("senha_especial", false);
        LetraEspecial = false;
    }

    if(LetraEspecial && LetraMi && LetraLength && LetraMa && LetraNum){
        document.getElementById("pass_check").style = "display: none"
        document.getElementById("pass_ok").style = "display: block"
    }else{
        document.getElementById("pass_check").style = "display: flex"
        document.getElementById("pass_ok").style = "display: none"
    }

})


