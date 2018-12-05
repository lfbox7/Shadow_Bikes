// JavaScript Document

function searchModal() {
	var x = document.getElementById("searchModal");
	if (x.style.display === "none") {
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
} 





//var domainroot="www.javascriptkit.com"
//var searchaction=["http://www.google.com/search"]
//var queryfieldname=["q"] 
//function switchaction(cur, index) {
//	cur.form.action=searchaction[index]
//	document.getElementById("q").name=queryfieldname[index]
//}
//function jksitesearch(curobj) {
//	for (i=0; i< document.jksearch.se.length; i++) { 
//		if (document.jksearch.se[i].checked==true)
//			switchaction(document.jksearch.se[i], i)
//	}
//	document.getElementById("q").value="site:"+domainroot+" "+curobj.qfront.value
//}