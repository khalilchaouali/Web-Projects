const player = document.getElementById("player");
const button = document.getElementById("button");
const input = document.getElementById("input");
const set = document.getElementById("set");
const reset = document.getElementById("reset");

let canStartPlay = false;

// This implementation is a basic example,
// robust implementation could be like:
// 1. set all possible media events (u can remove unneeded after)
// 2. group them by possible UI state types (stopping, stopped, playing, rebuffering/loading etc...)
// 3. trigger some checks for readyState and buffer to update UI state

function playPauseIcon(play) {
  if (play === true) {
    button.classList.add("is-playing");
  } else {
    button.classList.remove("is-playing");
  }
}

button.addEventListener("click", () => {
  if (canStartPlay === false) {
    return;
  }
  if (player.paused === true) {
    // play promise is supported well and preferable,
    // but for very old browsers or problematic one you
    // may create a fallback back to the usual sync flow
    player.play().then(() => {
      playPauseIcon(true);
    });
  } else {
    player.pause();
    console.log();
    playPauseIcon(false);
  }
});

["canplay", "canplaytrough", "playing"].forEach(eventName => {
  player.addEventListener(eventName, () => {
    playPauseIcon(true);
  });
});

set.addEventListener("click", () => {
  if (input.value.length > 0) {
    player.src = input.value;
    player.volume = 1.0;

    canStartPlay = true;
  }
});

reset.addEventListener("click", () => {
  playPauseIcon(false);
  player.pause();
  player.src = "";

  canStartPlay = false;
});

// Code below is for the debug purposes
// https://html.spec.whatwg.org/multipage/media.html#mediaevents
const events = [
  "abort",
  "canplay",
  "canplaythrough",
  "durationchange",
  "emptied",
  "ended",
  "error",
  "loadeddata",
  "loadedmetadata",
  "loadstart",
  "pause",
  "play",
  "playing",
  // "progress",
  "ratechange",
  "resize",
  "seeked",
  "seeking",
  "stalled",
  "suspend",
  // "timeupdate",
  "volumechange",
  "waiting"
];

function listen(domElement) {
  events.forEach(eventName => {
    domElement.addEventListener(eventName, event => {
      console.log(eventName);
    });
  });
}

listen(player);
