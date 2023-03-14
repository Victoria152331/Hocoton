function ShowNone(){
	popa = document.getElementById('bebe')
	popa.style.display = 'block'
}
function Pu(){
	popa = document.getElementById('bebe')
	popa.style.display = 'none'
	document.getElementById('popa').innerHTML = 'Принято'
}

function DimaSamiyKrytoi(elen) {
  elen.value="Выдано"
  AddKniga()
}
function AddKniga() {
	Kniga = document.getElementById('Kniga')
	prompt('Фамилия выдающего')
	Kniga.style.display = 'block'
}