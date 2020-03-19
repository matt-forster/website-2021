/* eslint-disable */

function setup() {
  var canvas = createCanvas(window.innerWidth, window.innerHeight);
  canvas.parent('squares');
}

// step is a whole number, we must find one between 0 and 1
// Classic normalization
function normalizeRange(min, max) {
  var divisor = max - min;

  return function (value) {
    return (value - min) / divisor;
  };
}

function findColor(first, second, step, normalize) {
  // colorMode(RBG);
  if (normalize) return lerpColor(first, second, normalize(step));
  return lerpColor(first, second, step);
}

function drawGrid() {
  var FIRST = color(49, 121, 237);
  var SECOND = color(44, 204, 76);

  var squareDimension = 70;
  var space = 7;
  var gridWidth = (window.innerWidth / squareDimension) - 2;
  var gridMaxHeight = (window.innerHeight / squareDimension) - 2;

  var normalizeHeight = normalizeRange(0, gridMaxHeight);
  var normalizeWidth = normalizeRange(0, gridWidth);
  var normalizeMouseX = normalizeRange(0, window.innerWidth);
  var normalizeMouseY = normalizeRange(0, window.innerHeight);

  posX = pmouseX || window.innerWidth / 2;
  posY = pmouseY || window.innerHeight / 2;

  var offset = squareDimension + space;
  strokeWeight(0);

  for (var x = 0; x < gridWidth; x++) {
    var horizontalOffset = offset * (x + 1);
    for (var y = 0; y < gridMaxHeight; y++) {
      var verticalOffset = offset * (y + 1);

      var squareColor = findColor(
        findColor(FIRST, SECOND, (x + noise(x, y) * 2 + normalizeMouseX(posX) * 6), normalizeWidth),
        findColor(FIRST, SECOND, (y + normalizeMouseY(posY) * 2), normalizeHeight),
        0.5
      );

      fill(squareColor);
      rect(window.innerWidth - horizontalOffset, window.innerHeight - verticalOffset, squareDimension, squareDimension, 7);
    }

    if (noise(x, y) <= 0.6) gridMaxHeight -= 1;
    if (x === floor(gridWidth * 0.15)) gridMaxHeight -= 1;
    if (x === floor(gridWidth * 0.5)) gridMaxHeight -= 1;
    if (x >= floor(gridWidth * 0.8)) gridMaxHeight -= 1;
  }
}

function draw() {
  drawGrid();
}

function mouseMoved() {
  redraw();
}

function windowResized() {
  resizeCanvas(window.innerWidth, window.innerHeight)
}
