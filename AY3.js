// JavaScript Document

alert("WOW! An alert!");

function hello() {
				var msg = "<b>Hello, <i>World! </i><br> Called from the function</b>";
				
				alert("inside the hello function");
				
				document.getElementByID("helloworld").innerHTML = msg;
				document.open();
				document.write(msg);
				document.title="Ho, ho, ho,: a new title!";
				
				document.close();
			
			
		}	//	end hello()
		
		
function yo() {
		var secret = "<h1>YO!	(What else would it say??)";
		secret = secret + "<br> But, I suppose, it could be polite and say: ";   //concatination
		secret += "<i> HELLO! </i> </h1>";
		
		document.open();
		document.title = "Javascript with script enabled and NOT enabled";
		document.write(secret);
		document.close();
		
		
} //end function yo