/* RESET */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    min-height: 100vh;
    background: radial-gradient(circle at top, #1a1a2e, #0b0b0f 60%);
    color: #ffffff;
}

/* HEADER */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 40px;
}

.logo {
    display: flex;
    align-items: center;
    gap: 12px;
}

.logo span {
    background: #6c4cff;
    padding: 8px 12px;
    border-radius: 8px;
    font-weight: 700;
}

.user {
    background: #1f1f2f;
    padding: 8px 16px;
    border-radius: 10px;
    font-size: 14px;
}

/* HERO */
.hero {
    text-align: center;
    margin-top: 60px;
}

.hero h1 {
    font-size: 56px;
    font-weight: 700;
}

.hero h1 span {
    color: #7a5cff;
}

.hero p {
    margin-top: 12px;
    color: #cfcfcf;
}

/* CARDS */
.cards {
    max-width: 1100px;
    margin: 80px auto;
    padding: 0 20px;
    display: flex;
    gap: 40px;
    justify-content: center;
}

.card {
    width: 420px;
    padding: 40px;
    border-radius: 18px;
    position: relative;
    overflow: hidden;
    transition: transform 0.4s ease;
}

.card:hover {
    transform: translateY(-10px);
}

.shop {
    background: linear-gradient(145deg, #1a3a2b, #1f6a4d);
}

.rules {
    background: linear-gradient(145deg, #2a1a3a, #4f2f6a);
}

.card h2 {
    margin-top: 20px;
    font-size: 22px;
}

.card p {
    margin-top: 12px;
    font-size: 14px;
    color: #e0e0e0;
}

.card a {
    display: inline-block;
    margin-top: 25px;
    padding: 10px 24px;
    border-radius: 20px;
    background: rgba(255,255,255,0.15);
    color: #fff;
    text-decoration: none;
}

.card a:hover {
    background: #ffffff;
    color: #000000;
}

/* TIENDA */
.product {
    background: #1f1f2f;
    padding: 20px;
    border-radius: 16px;
    margin-bottom: 20px;
}

/* BOTÓN VOLVER */
.back {
    display: inline-block;
    margin-top: 30px;
    color: #7a5cff;
    text-decoration: none;
}

/* RESPONSIVE */
@media (max-width: 900px) {
    .cards {
        flex-direction: column;
        align-items: center;
    }

    .card {
        width: 100%;
        max-width: 420px;
    }

    .hero h1 {
        font-size: 42px;
    }
}
