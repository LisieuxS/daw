function changeColour(_elementId,_color)
{
 	element=document.getElementById(_elementId);
 	element.style.color=_color;

}

function changeDim(_elementId, _width, _height)
{
 	element=document.getElementById(_elementId);
 	element.style.width = _width;
 	element.style.height = _height;
}

function changeVisibility (_divisionId, _visibility)
{
	division=document.getElementById(_divisionId);
	division.style.visibility=_visibility;
}

function changeFont(_elementId, _family, _size)
{
 	element=document.getElementById(_elementId);
 	element.style.fontFamily = _family;
 	element.style.fontSize = _size;
}

function changeImage(_elementId,_imageName)
{
	document.getElementById(_elementId).src=_imageName;
}