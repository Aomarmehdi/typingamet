const words = 
"in one good real one not school set they state high life consider on and not come what also for set point can want as while with of order child about school thing never hold find order each too between program work end you home place around while place problem end begin interest while public or where see time those increase interest be give end think seem small as both another a child same eye you between way do who into again good fact than under very head become real possible some write know however late each that with because that place nation only for each change form consider we would interest with world so order or run more open that large write turn never over open each over change still old take hold need give by consider line only leave while what set up number part form want against great problem can because head so first this here would course become help year first end want both fact public long word down also long for without new turn against the because write seem line interest call not if line thing what work people way may old consider leave hold want life between most place may if go who need fact such program where which end off child down change to from people high during people find to however into small new general it do that could old for last get another hand much eye great no work and with but good there last think can around use like number never since world need what we around part show new come seem while some and since still small these you general which seem will place come order form how about just also they with state late use both early too lead general seem there point take general seem few out like might under if ask while such interest feel word right again how about system such between late want fact up problem stand new say move a lead small however large public out by eye here over so be way use like say people work for since interest so face order school good not most run problem group run she late other problem real form what just high no man do under would to each too end point give number child through so this large see get form also all those course to work during about he plan still so like down he look down where course at who plan way so since come against he all who at world because while so few last these mean take house who old way large no first too now off would in this course present order home public school back own little about he develop of do over help day house stand present another by few come that down last or use say take would each even govern play around back under some line think she even when from do real problem between long as there school do as mean to all on other good may from might call world thing life turn of he look last problem after get show want need thing old other during be again develop come from consider the now number say life interest to system only group world same state school one problem between for turn run at very against eye must go both still all a as so after play eye little be those should out after which these both much house become both school this he real and may mean time by real number other as feel at end ask plan come turn by all head increase he present increase use stand after see order lead than system here ask in of look point little too without each for both but right we come world much own set we right off long those stand go both but under now must real general then before with much those at no of we only back these person plan from run new as own take early just increase only look open follow get that on system the mean plan man over it possible if most late line would first without real hand say turn point small set at in system however to be home show new again come under because about show face child know person large program how over could thing from out world while nation stand part run have look what many system order some one program you great could write day do he any also where child late face eye run still again on by as call high the must by late little mean never another seem to leave because for day against public long number word about after much need open change also".split(" ");
const number = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
const numberCoust = number.length; 
document.querySelector(".content").style.opacity = 0;
// console.log(paragraphs[0])
document.querySelector(".time").addEventListener("click", (e) => {
  let a = document.querySelector(".time")
  console.log(e.target.innerHTML);
  newGame()
  document.querySelector("#info").innerHTML = e.target.innerHTML;
    localStorage.setItem("time" ,e.target.innerHTML);
})


const wordCoust = words.length;
let gameTime = localStorage.getItem("time") * 1000;
window.timer = null;
window.gameStart = null;

function addClass(el, nameC) {
  el.className +=  " " + nameC;
}

function removeClass(el, nameC) {
  el.className = el.className.replace(nameC, '');
}

function randomNumber() {
  const randomIndex = Math.ceil(Math.random() * numberCoust)
  return randomIndex === numberCoust ? number[randomIndex - 1] : number[randomIndex];
}

function randomWord() {
  const randomIndex = Math.ceil(Math.random() * wordCoust);
  return randomIndex === wordCoust ?words[randomIndex-1] : words[randomIndex];
}

function formatWord(word) {
  return `<div class = "word"><span class = "letter">${word.split("").join('</span><span class = "letter">')}</span></div>`;
}

function formatNumber(number) {
  let a = (number * number * number).toString()
  return `<div class = "word"><span class = "letter">${a.split("").join('</span><span class = "letter">')}</span></div>`;

}



  function textColorY() {
    const a = document.getElementById("numbers")
    a.style.color = "#e2b714";
  }
  function textColorO() {
    const a = document.getElementById("numbers");
    a.style.color = "#666"
    
  }
  window.onload = () => {
    a == false ? textColorO() :textColorY();

  }
  var a = localStorage.getItem("a") === "false" ? a = false : a = true
  function newGame() {
    // a = localStorage.getItem("a")
    a == false ?localStorage.setItem("a", false): localStorage.setItem("a",true);
    localStorage.getItem("a") === "false" ? a = false : a = true
    // a = localStorage.getItem("a");  
    console.log(a)
  document.getElementById("words").innerHTML = "";
  for (let i = 0; i < 200; i++) {
    document.getElementById("words").innerHTML += formatWord(randomWord());
    if (randomNumber() == 0 && a === true)
    document.getElementById("words").innerHTML += formatNumber(randomNumber());
}
  addClass(document.querySelector(".word"), "current");
  addClass(document.querySelector(".letter"), "current");
  document.querySelector('#info').innerHTML = (gameTime / 1000) + ''
  window.timer = null;
}
function getMistakes() {
  let mistakes = 0 ;
  const words = [...document.querySelectorAll('.word')];
  const lastTypedWord = document.querySelector('.word.current');
  const lastTypedWordIndex = words.indexOf(lastTypedWord) + 1;
  const typedWords = words.slice(0, lastTypedWordIndex);
    typedWords.filter(word => {
    const letters = [...word.children];
    for (let i = 0; i < letters.length; i++) {
      if(letters[i].classList.contains("incorrect") )
      mistakes += 1;
    }
  })
  return mistakes
}

function getCpm() {
  let cpm = 0 ;
  const words = [...document.querySelectorAll('.word')];
  const lastTypedWord = document.querySelector('.word.current');
  const lastTypedWordIndex = words.indexOf(lastTypedWord) + 1;
  const typedWords = words.slice(0, lastTypedWordIndex);
    typedWords.filter(word => {
    const letters = [...word.children];
    for (let i = 0; i < letters.length; i++) {
      if(letters[i].classList.contains("correct") )
      cpm += 1;
  }
})
return cpm
}

function getWpm() {
  const words = [...document.querySelectorAll('.word')];
  const lastTypedWord = document.querySelector('.word.current');
  const lastTypedWordIndex = words.indexOf(lastTypedWord) + 1;
  const typedWords = words.slice(0, lastTypedWordIndex);
  const correctWords = typedWords.filter(word => {
    const letters = [...word.children];
    // console.log(`mehdi${letters}`)
    const incorrectLetters = letters.filter(letter => letter.className.includes('incorrect'));
    const correctLetters = letters.filter(letter => letter.className.includes('correct'));
    return incorrectLetters.length === 0 && correctLetters.length === letters.length;
  });
  return correctWords.length / gameTime * 60000;
}

function gameOver() {
  clearInterval(window.timer);
  addClass(document.getElementById('game') , 'over')
  const result = getWpm();
  // console.log({result})
  document.getElementById("cursor").style.display = "none"
document.querySelector(".content").style.opacity = 0;
  document.getElementById('info').style.opacity = 0 ;
document.querySelector(".content").style.opacity = 1;
  document.querySelector(".temps").lastElementChild.innerHTML = localStorage.getItem("time");
  document.querySelector(".mistake").lastElementChild.innerHTML = getMistakes();
  document.querySelector("#wpm").lastElementChild.innerHTML = result
  document.querySelector(".cpm").lastElementChild.innerHTML = getCpm();
  // console.log(getMistakes());
  // console.log(getCpm());
}


document.addEventListener('keydown', (ev) => {
  document.querySelector("#modes").style.visibility = "hidden";
  document.querySelector("#testConfig").style.visibility = "hidden";
  console.log(ev)
  const key = ev.key;
  const currentWord = document.querySelector(".word.current");
  const currentLetter = document.querySelector(".letter.current");
  const expected = currentLetter?.innerHTML || ' ';
  const isLetter = key.length === 1 && key !== " ";
  const isSpace = key === ' ';
  const isBackspace = key === 'Backspace';
  const isFirstLetter = currentLetter === currentWord.firstChild ;
  const words = document.getElementById('words');
  const isFirstWord = currentWord === words.firstChild;
  const isCtrl =  ev.ctrlKey;
  
  console.log(isCtrl)
  if (document.querySelector('#game.over')) { 
    return;
  }
  
  console.log({key, expected});
  
  if (!window.timer && isLetter) {
    window.timer = setInterval(() => {
      if (!window.gameStart) {
        window.gameStart = (new Date()).getTime();
      }
      const currentTime = (new Date()).getTime();
      const msPassed = currentTime - window.gameStart;
      const sPassed = Math.round(msPassed / 1000);
      const sLeft = Math.round((gameTime / 1000) - sPassed);
      if (sLeft < 0) {
        gameOver();
        return;
      }
      document.querySelector('#info').innerHTML = sLeft + '';
    }, 1000);
}
  if (isLetter) {
    if (currentLetter) {
      
      
      addClass(currentLetter, key === expected ? 'correct' : 'incorrect');
      removeClass(currentLetter, 'current');
      if (currentLetter.nextSibling) {
        addClass(currentLetter.nextSibling, 'current');
      } 
    } else {
      const incorrectLetter = document.createElement('span');
      incorrectLetter.innerHTML = key;
      incorrectLetter.className = 'letter incorrect extra ';
        currentWord.appendChild(incorrectLetter);
      }
    }
    
    if (isSpace) {
      if ( expected !== ' ') {
        const letterToInavalidate = [...document.querySelectorAll('.word.current .letter:not(.correct)')];
        letterToInavalidate.forEach(letter =>{
          addClass(letter, 'incorrect');
        })
      }

    removeClass(currentWord, 'current');
    addClass(currentWord.nextSibling, 'current');
    if (currentLetter) {
      removeClass(currentLetter, 'current');
    }
    addClass(currentWord.nextSibling.firstChild, 'current');
  }
  if (isBackspace) {
  // console.log(currentLetter.previousElementSibling.classList.contains('incorrect'))
  
if (currentLetter && isFirstLetter && !isCtrl){
  if(!isFirstWord) 
  removeClass(currentWord, 'current');
    addClass(currentWord.previousSibling, 'current');
    removeClass(currentLetter, 'current');
    addClass(currentWord.previousSibling.lastChild, 'current');
    removeClass(currentWord.previousSibling.lastChild, 'incorrect');
    removeClass(currentWord.previousSibling.lastChild, 'correct');
  }
  if (currentLetter && !isFirstLetter && !isCtrl){
    
    removeClass(currentLetter, 'current');
    addClass(currentLetter.previousSibling, 'current');
    removeClass(currentLetter.previousSibling, 'incorrect');
    removeClass(currentLetter.previousSibling, 'correct');
  }
  if (!currentLetter && !isCtrl) {
    addClass(currentWord.lastChild, 'current');
    removeClass(currentWord.lastChild, 'incorrect');
    removeClass(currentWord.lastChild, 'correct');
  }

  if (currentWord.lastChild.classList.contains('extra')) {
    currentWord.lastChild.remove();
  }
  
// ctrl + Backspace 
// const children = [...currentWord.children]; 
//   if (ev.ctrlKey && isBackspace){
//     if (currentWord.firstChild.classList.contains('current')){
//       removeClass(currentLetter, 'current');
//       removeClass(currentWord, 'current');
//       addClass(currentWord.previousSibling, 'current');
//       addClass(currentWord.previousSibling.firstChild, 'current');
//       let childrenFirstLetter = [...currentWord.previousSibling.children];
//       for (let i = 0; i <childrenFirstLetter.length; i++){
//         removeClass(childrenFirstLetter[i], 'incorrect');
//         removeClass(childrenFirstLetter[i], 'correct');
//       }
//       addClass(children[0], 'current')
//     } else {
//       for (let i = 0; i <children.length; i++){
//         if (children[i].classList.contains('extra')) {
//           children[i].remove();
//         }
//         removeClass(children[i],'current');
//         removeClass(children[i], 'incorrect');
//         removeClass(children[i], 'correct');
//       }
//       addClass(children[0], 'current');
//     }
//   }
}

// // move lines / words

if (currentWord.getBoundingClientRect().top > 380 ) {
  const words = document.getElementById('words');
  const margin = parseInt(words.style.marginTop || '0px');
  words.style.marginTop = (margin -35) + 'px';
}



//move cursor 

const nextLetter = document.querySelector('.letter.current');
const nextWord = document.querySelector('.word.current');
const cursor = document.getElementById('cursor');
cursor.style.animation = 'none';
if (nextLetter) {
  cursor.style.top = nextLetter.getBoundingClientRect().top + 2 +'px';
  cursor.style.left = nextLetter.getBoundingClientRect().left + 'px';
} else {
  cursor.style.top = nextWord.getBoundingClientRect().top + 2 +'px';
  cursor.style.left = nextWord.getBoundingClientRect().right + 'px';
  
}
const resultWpm = getWpm();
// console.log(result); 
document.querySelector("#wpm").lastElementChild.innerHTML = `${resultWpm}`;
console.log(document.querySelector("#wpm").lastElementChild)



})


document.getElementById('newGameBtn').addEventListener('click', () => {
  window.location.reload();
})

newGame();




const typingText = document.querySelector(".typing-text")

function randomParagraph() {
  console.log(paragraphs[0]);
}


