const express = require('express');
const bodyParser = require('body-parser');

const app = express();
const PORT = 3000;

app.use(bodyParser.json());

function calculateBkn(skey) {
    let hashValue = 5381;
    for (const char of skey) {
        hashValue += (hashValue << 5) + char.charCodeAt(0);
    }
    return hashValue & 2147483647;
}

app.post('/calculate_bkn', (req, res) => {
    const { skey } = req.body;

    if (skey) {
        const bknValue = calculateBkn(skey);
        res.json({ bkn: bknValue });
    } else {
        res.status(400).json({ error: 'Invalid input' });
    }
});

app.listen(PORT, () => {
    console.log(`Server is running on port ${PORT}`);
});
