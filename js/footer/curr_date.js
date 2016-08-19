function printCurrentDate() {
	var currentDate = new Date() //create a new Date() obj
	var localDate = currentDate.toLocaleString() //set to the curr time zone string
	var strToday = localDate.substring(0,40) // take first 10 chars from the string
	document.write("<blockquote><h2>Today is " + strToday + "</h2></blockquote>")
}
