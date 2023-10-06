// //Init
setPos(10, 300);
setLineWidth(2);
faceRight();
shiftColor(Math.random() * 0.4);

let code = "NNEESOOESEENNEEOOSEOSEEENNESENSSENNEESSOOEEENNEEOOSEOSEEENEENOOEESOOSEEEEEEENONSESENNSSENNEESSOOEEENNSSEENNSSEEENOONEEOOSEESEEEENNEESSOOEEENNEESOOEESENNESENSSEEENOONEEOOSEESEEEENNSSEEENNEESOOEESEEEENNEEOOSEOSEEENNEESSOOEEENNEESOOESEENNEEOOSEOSEEEENNOEEOSSEEEEENNEESOOEESOOEEENNEESOOESEENNSSEENNSSENNESNESSENNEEOOSEOSEEENNSSEENNSSEEENOONEEOOSEESENNEEOOSEOSEEEEEENNEESSOOEEENNEEOOSEOSEEENNESNESSENNEESOOEESENNSSENNESENSS";

let message = code.split("");

let N = 'N';
let E = 'E';
let O = 'O';
let S = 'S';

function readTheMessage(mess) {
  for (let i = 0; i < mess.length; i++) {
    if (mess[i] == 'N') {
      faceUp();
      forward(10);
    } else if (mess[i] == 'E') {
      faceRight();
      forward(5);
    } else if (mess[i] == 'O') {
      faceLeft();
      forward(5);
    } else if (mess[i] == 'S') {
      faceDown();
      forward(10);
    }
  }
}


//on lance le message
readTheMessage(message);;