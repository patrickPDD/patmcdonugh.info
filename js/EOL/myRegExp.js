var myString = "Paul, Paula, Pauline, paul, Paul";
var myRegExp = /Paul/gi;
myString = myString.replace(myRegExp, "Ringo");
alert (myString);
