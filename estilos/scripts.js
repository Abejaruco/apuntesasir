function setCookie(c_name,value,exdays){
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}
function getCookie(c_name){
var i,x,y,ARRcookies=document.cookie.split(";");
for (i=0;i<ARRcookies.length;i++)
{
  x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
  y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);
  x=x.replace(/^\s+|\s+$/g,"");
  if (x==c_name)
    {
    return unescape(y);
    }
  }
}
function resolucion(){
	resolucion = getCookie("resolucion_horizontal");
	if(resolucion == null){
		valor_cookie = screen.width;
		nombre_cookie = "resolucion_horizontal";
		setCookie(nombre_cookie, valor_cookie,10);
		//document.write("No hay cookie");
		document.location.reload(true);
	}
	//document.write(resolucion);
}
