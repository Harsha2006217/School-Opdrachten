const images = ["images-game/brie.jpeg", "images-game/chaumes.jpeg", "images-game/geitenkaas.jpeg", "images-game/kaas.jpeg", "images-game/schapenkaas.jpeg", "images-game/schimmelkaas.jpeg",]
const imageids = ["image1", "image2", "image3", "image4", "image5", "image6", "image7", "image8", "image9", "image10", "image11", "image12"]
const beurt_info = {
    geopende_kaarten: 0,
    kaart1_value: 0,
    kaart1_id: 0,

    kaart2_value: 0,
    kaart2_id: 0,
    nextPlayer: 1,
    currentlyPlaying: false,
    goedcount: 0,
}
alert_problem = 0
goeie_kaarten = []
const imagestore = {}
dubbelcheck = []
imageids.forEach(function (id) {
    imagestore[id] = null;
});


document.getElementById("beurt").style.visibility = "hidden";

function cardentifier() {

    function reroll(temp) {
        i = true
        while (i == true) {
            filename = images[Math.floor(Math.random() * images.length)];
            let count = dubbelcheck.filter(x => x === filename).length;

            if (count < 2) {
                dubbelcheck.push(filename);
                temp.src = filename;
                i = false
            }
        }
    }



    imageids.forEach(function (id) {
        let filename = images[Math.floor(Math.random() * images.length)];
        let temp = document.getElementById(id)
        let count = dubbelcheck.filter(x => x === filename).length;


        if (count == 2) {
            reroll(temp)
            if (id == "image1") {
                imagestore.image1 = temp.src;

            }

            if (id == "image2") {
                imagestore.image2 = temp.src;


            }

            if (id == "image3") {
                imagestore.image3 = temp.src;

            }

            if (id == "image4") {
                imagestore.image4 = temp.src;
            }

            if (id == "image5") {
                imagestore.image5 = temp.src;
            }

            if (id == "image6") {
                imagestore.image6 = temp.src;
            }

            if (id == "image7") {
                imagestore.image7 = temp.src;
            }

            if (id == "image8") {
                imagestore.image8 = temp.src;
            }

            if (id == "image9") {
                imagestore.image9 = temp.src;
            }

            if (id == "image10") {
                imagestore.image10 = temp.src;
            }

            if (id == "image11") {
                imagestore.image11 = temp.src;
            }

            if (id == "image12") {
                imagestore.image12 = temp.src;
            }
        }
        if (count < 2) {
            dubbelcheck.push(filename)
            temp.src = filename
            if (id == "image1") {
                imagestore.image1 = temp.src;

            }

            if (id == "image2") {
                imagestore.image2 = temp.src;


            }

            if (id == "image3") {
                imagestore.image3 = temp.src;

            }

            if (id == "image4") {
                imagestore.image4 = temp.src;
            }

            if (id == "image5") {
                imagestore.image5 = temp.src;
            }

            if (id == "image6") {
                imagestore.image6 = temp.src;
            }

            if (id == "image7") {
                imagestore.image7 = temp.src;
            }

            if (id == "image8") {
                imagestore.image8 = temp.src;
            }

            if (id == "image9") {
                imagestore.image9 = temp.src;
            }

            if (id == "image10") {
                imagestore.image10 = temp.src;
            }

            if (id == "image11") {
                imagestore.image11 = temp.src;
            }

            if (id == "image12") {
                imagestore.image12 = temp.src;
            }

        }
    });
    console.log(imagestore)
}

function cardround() {
    imageids.forEach(function (id) {
        let t = document.getElementById(id)
        t.src = "images-game/achterkant.jpeg"
        t.style.visibility = "hidden";
    });
}

document.getElementById("log").innerHTML = "dynamische tekst logs :D";
let speler1_score = 0
let speler2_score = 0
let speler_aan_de_beurt = "speler 1";


function beurtspeler1() {
    if (beurt_info.currentlyPlaying == true) {
        console.log(beurt_info.kaart1_value + beurt_info.kaart2_value)
        if (beurt_info.kaart1_value == beurt_info.kaart2_value) {
            speler1_score += 1
            goeie_kaarten.push(beurt_info.kaart1_id)
            goeie_kaarten.push(beurt_info.kaart2_id)
            console.log(beurt_info.kaart1_id + ' ' + beurt_info.kaart2_id)
            if (beurt_info.kaart1_id != 0 || beurt_info.kaart2_id != 0) {
                console.log(beurt_info.kaart1_id + ' ' + beurt_info.kaart2_id)
                document.getElementById(beurt_info.kaart1_id).style.visibility = "hidden"
                document.getElementById(beurt_info.kaart2_id).style.visibility = "hidden"
            }
            
            beurt_info.kaart1_id = 0;
            beurt_info.kaart2_id = 0;
            beurt_info.kaart1_value = 0;
            beurt_info.kaart2_value = 0;
            beurt_info.goedcount += 1;
            cardaround()
            if(beurt_info.kaart1_value == 0){
            beurt_info.currentlyPlaying = false;             
            document.getElementById("log").innerHTML = speler_aan_de_beurt + " had het goed";
            console.warn("het is goed")
            }
        } else {
            console.warn("het is niet goed")
            document.getElementById("log").innerHTML = speler_aan_de_beurt + " had het niet goed";
            beurt_info.kaart1_id = 0;
            beurt_info.kaart2_id = 0;
            beurt_info.kaart1_value = 0;
            beurt_info.kaart2_value = 0;
            cardaround()

        }
        console.log("speler1")
        console.log(beurt_info)
        refresh_leaderbord()
        beurt_info.currentlyPlaying = false
        beurt_info.nextPlayer = 2;
    }
    
}

function beurtspeler2() {
    if (beurt_info.currentlyPlaying == true) {
        if (beurt_info.kaart1_value == beurt_info.kaart2_value && beurt_info.kaart1_value != 0 && beurt_info.kaart2_value != 0) {
            speler2_score += 1
            goeie_kaarten.push(beurt_info.kaart1_id)
            goeie_kaarten.push(beurt_info.kaart2_id)
            if (beurt_info.kaart1_id != 0 || beurt_info.kaart2_id != 0) {
                document.getElementById(beurt_info.kaart1_id).style.visibility = "hidden";
                document.getElementById(beurt_info.kaart2_id).style.visibility = "hidden";
                beurt_info.kaart1_id = 0;
                beurt_info.kaart2_id = 0;
                beurt_info.kaart1_value = 0;
                beurt_info.kaart2_value = 0;
                beurt_info.goedcount += 1;
                cardaround()
            }
            console.warn("het is goed")
            document.getElementById("log").innerHTML = speler_aan_de_beurt + " had het goed";
        } else {
            beurt_info.kaart1_id = 0;
            beurt_info.kaart2_id = 0;
            beurt_info.kaart1_value = 0;
            beurt_info.kaart2_value = 0;
            console.warn("het is niet goed")
            document.getElementById("log").innerHTML = speler_aan_de_beurt + " had het  niet goed";
            cardaround()
        }
        console.log("speler2")
        refresh_leaderbord()
        beurt_info.nextPlayer = 1;
    }
    if (beurt_info.goedcount == 6){
        alert("het spel is afgelopen ")
    }

    beurt_info.currentlyPlaying = false;
}


function refresh_leaderbord() {
    if(beurt_info.currentlyPlaying == false){
        speler_aan_de_beurt = "speler 1"
    }
    if(beurt_info.currentlyPlaying == true){
        speler_aan_de_beurt = "speler 2"
    }
    document.getElementById("beurt").innerHTML = speler_aan_de_beurt + " is aan de beurt"
    document.getElementById("speler1").innerHTML = "<img src='images-game/avatar_1.jpeg' id='avatar1'> speler 1: " + speler1_score + " punten";
    document.getElementById("speler2").innerHTML = "<img src='images-game/avatar_2.jpeg' id='avatar2'> speler 2: " + speler2_score + " punten";
}

function tegelclick(image) {
    o = 0
    beurt_info.geopende_kaarten += 1;
    t = document.getElementById(image).src = imagestore[image]
    t.src = imagestore[image]
    j = imagestore[image]
    console.log(imagestore[image])
    console.log(beurt_info)
    if (beurt_info.kaart1_value == 0) {
        beurt_info.kaart1_id = image
        beurt_info.kaart1_value = j
        o += 1
        console.log("kaart1 heeft een waarde")
    }

    if (beurt_info.kaart1_value != 0 && beurt_info.kaart2_value == 0 && o == 0) {
        beurt_info.kaart2_id = image
        beurt_info.kaart2_value = j
        console.log("kaart2 heeft een waarde")
    }
    if (beurt_info.kaart1_value != 0 && beurt_info.kaart2_value != 0) {
        if (beurt_info.nextPlayer == 1) {
            setTimeout(() => 
                beurtspeler1(), 500);
            }

        if (beurt_info.nextPlayer == 2) {
            setTimeout(() => 
                beurtspeler2(), 500);
            }
    }
    if (beurt_info.kaart1_value != 0) {
        console.log("currentplaying = true")
        beurt_info.currentlyPlaying = true
    }
     if (beurt_info.goedcount == 6){
                alert("het spel is afgelopen ")
            }
    alert_problem = 0
}



function cardaround(){
    imageids.forEach(function (id){
    let t = document.getElementById(id)
    if (goeie_kaarten.includes(id) == false){
        t.src = "images-game/achterkant.jpeg"
        t.style.visibility = "visible";
    }
    }
    )}


//onload
refresh_leaderbord() // zorgt dat alles op 0 staat en inlaad
cardround() // draait de kaarten naar de achterkant

// start spel
function start() { // word getriggered wanneer op de knop "start spel geclickt word"
    cardentifier() // geeft kaarten een value / foto
    cardround()
    cardaround()
    document.getElementById("beurt").style.visibility = "visible";
}





