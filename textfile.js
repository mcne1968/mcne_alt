//Window object
//show messag

function WriteToFile()
{
var fso = new ActiveXObject("Scripting.FileSystemObject");
var s = fso.CreateTextFile("zugriff.txt", true);
s.WriteLine('Hello');
s.Close();
}
