// pairs.js

// Define arrays for the emoji parts' image paths
const bodies = [
    'res/skin/green.png',
    'res/skin/red.png',
    'res/skin/yellow.png',
];

const mouths = [
    'res/mouth/open.png',
    'res/mouth/sad.png',
    'res/mouth/smiling.png',
    'res/mouth/straight.png',
    'res/mouth/surprise.png',
    'res/mouth/teeth.png',
];

const eyes = [
    'res/eyes/closed.png',
    'res/eyes/laughing.png',
    'res/eyes/long.png',
    'res/eyes/normal.png',
    'res/eyes/rolling.png',
    'res/eyes/winking.png',
];

let flippedCards = [];
let attempts = 0;
let startTime;
let timerInterval;

// Function to handle card click event
function handleCardClick(cardContainer, emoji) {
    if (!startTime) {
        // Start the timer on the first card flip
        startTime = Date.now();
        timerInterval = setInterval(updateTimer, 1000);
    }

    if (flippedCards.length === 2) {
        // Two cards already flipped, so flip them back and reset the array
        setTimeout(() => {
            flippedCards.forEach((card) => {
                card.classList.remove('flipped');
            });
            flippedCards = [];
        }, 1000); // Wait for 1 second before flipping back
    }

    if (!cardContainer.classList.contains('flipped')) {
        cardContainer.classList.add('flipped');
        flippedCards.push(cardContainer);

        if (flippedCards.length === 2) {
            // Two cards flipped, check if they match
            const [emoji1, emoji2] = flippedCards.map((card) => card.dataset.emoji);
            if (emoji1 === emoji2) {
                // Cards match, keep them flipped
                flippedCards = [];

                // Check if the game is completed (all cards are flipped)
                if (document.querySelectorAll('.card-container.flipped').length === 10) {
                    endGame(); // Game is completed, show the end screen
                }
            } else {
                // Cards don't match, wait for 1 second and then flip back
                attempts++;
                updateAttemptsDisplay(); // Update attempts display
                setTimeout(() => {
                    flippedCards.forEach((card) => {
                        card.classList.remove('flipped');
                    });
                    flippedCards = [];
                }, 1000);
            }
        }
    }
}

// Function to shuffle an array
function shuffleArray(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
}

// Function to create a random emoji
function createRandomEmoji() {
    const randomBody = bodies[Math.floor(Math.random() * bodies.length)];
    const randomMouth = mouths[Math.floor(Math.random() * mouths.length)];
    const randomEyes = eyes[Math.floor(Math.random() * eyes.length)];
    return `     
<img src="${randomBody}"style="width:50px;height:50px;" class="image1 card-img-top">
<img src="${randomEyes}"style="width:50px;height:50px;" class="image3 card-img-top">
<img src="${randomMouth}"style="width:50px;height:50px;" class="image3 card-img-top">
`;
}


// Function to create a card element with a specific emoji (using Bootstrap card component)
function createCard(emoji) {
    const cardContainer = document.createElement('div');
    cardContainer.classList.add('card-container');
    cardContainer.dataset.emoji = emoji; // Store the emoji as a data attribute

    const card = document.createElement('div');
    card.classList.add('card', 'col-md-2', 'm-2', 'p-2'); // Bootstrap classes for spacing and styling

    const frontSide = document.createElement('div');
    frontSide.classList.add('card-front');
    frontSide.innerHTML = '<div style="display: flex; background-color: white;"  class="card-img" />';

    const backSide = document.createElement('div');
    backSide.classList.add('card-back');
    backSide.innerHTML = `${emoji}`;

    card.appendChild(frontSide);
    card.appendChild(backSide);
    cardContainer.appendChild(card);

    // Add click event listener to the card
    cardContainer.addEventListener('click', () => {
        handleCardClick(cardContainer, emoji);
    });

    return cardContainer;
}


// Function to start the game
function startGame() {
    const gameContainer = document.getElementById('game-container');
    const startButton = document.getElementById('start-button');
    startButton.style.display = 'none'; // Hide the button

    const emojis = [];
    const uniqueEmojis = new Set(); // To ensure unique emojis for pairs

    while (uniqueEmojis.size < 5) {
        const emoji = createRandomEmoji();
        uniqueEmojis.add(emoji);
    }

    // Duplicate each emoji to form pairs
    uniqueEmojis.forEach((emoji) => {
        emojis.push(emoji);
        emojis.push(emoji);
    });

    // Shuffle the emojis to randomize their positions
    shuffleArray(emojis);

    // Clear any previous game board content
    const cardsContainer = document.getElementById('cards-container');
    cardsContainer.innerHTML = '';

    // Add the cards to the game container using Bootstrap grid layout
    emojis.forEach((emoji) => {
        const card = createCard(emoji);
        cardsContainer.appendChild(card);
    });
}

// Function to update the timer display
function updateTimer() {
    const currentTime = Date.now();
    const timeElapsed = currentTime - startTime;
    const timerDisplay = document.getElementById('timer');
    timerDisplay.textContent = formatTime(timeElapsed);
}

// Function to update the attempts display
function updateAttemptsDisplay() {
    const attemptsDisplay = document.getElementById('attempts');
    attemptsDisplay.textContent = `Attempts: ${attempts}`;
}

// Function to format time in MM:SS format
function formatTime(time) {
    const minutes = Math.floor(time / 60000);
    const seconds = Math.floor((time % 60000) / 1000);
    return `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
}

// Function to end the game and display the end screen
function endGame() {
    clearInterval(timerInterval); // Stop the timer
    const currentTime = Date.now();
    const timeElapsed = currentTime - startTime;
    const timeTaken = formatTime(timeElapsed);

    const gameContainer = document.getElementById('game-container');
    gameContainer.innerHTML = `
        <h2>Congratulations! You completed the game.</h2>
        <p>Attempts: ${attempts}</p>
        <p>Time taken: ${timeTaken}</p>
        <button class="btn btn-primary" id="play-again-button">Play Again</button>
        <button class="btn btn-secondary" id="submit-score-button">Submit Score</button>
    `;

    // Add event listeners for the end screen buttons
    const playAgainButton = document.getElementById('play-again-button');
    playAgainButton.addEventListener('click', () => {
        location.reload(); // Reload the page to play again
    });

    const submitScoreButton = document.getElementById('submit-score-button');
    submitScoreButton.addEventListener('click', () => {
        submitScore(); // Call the function to submit the score (You need to implement this function)
    });
}

// Function to submit the score (You can implement this to send the score to the server)
function submitScore() {
    // Implement the logic to send the score to the server here
    // For example, using a fetch API to make a POST request to the server
}

// Event listener for the start button
document.getElementById('start-button').addEventListener('click', startGame);
