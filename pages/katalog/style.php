<style>
/* body options */

.body-options {
    position: relative;
}

.body-option-right {
    display: flex;
    /* background: black; */
    height: 10vh;
    margin: 20px 60px 20px 20px;
    align-items: center;
    position: relative;
    right: 0%;
    justify-content: end;
    gap: 10px;
    font-weight: 600;
}

.body-option-right-options {
    cursor: pointer;
    border: 2px solid #ebf2f7;
    /* padding: 10px 20px; */
    border-radius: 4px;
    height: 65%;
    width: 13%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

/* wardrobe */
.wardrobe-cont {
    margin: 20px 0px 0px 0px;
    display: flex;
    gap: 25px;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

.wardrobe-items {
    background-color: #F1F1F1;
    height: 320px;
    min-width: 200px;
    width: 20%;
    border-radius: 8px;
}

/* item */

.wardrobe-img-cont>img {
    height: 200px;
    width: 160px;
    position: relative;
    left: 50%;
    /* top: 50%; */
    transform: translateX(-50%);
    /* background-color: #F1F1F1; */
}

.wardrobe-details-cont {
    position: relative;
    display: flex;
    flex-flow: column;
    /* background: white; */
    justify-content: center;
    /* align-items: center; */
    bottom: 0%;
    height: 35%;
}

b.wardrobe-title {
    margin: 0px 0px 0px 10px;
}

/* buttons */
.size-options {
    display: flex;
    gap: 10%;
    justify-content: center;
    height: 25%;
}

.size-options>button {
    width: 20%;
    border: 1px solid #ccc;
    transition: 0.5s;
}

.size-options>button:focus {
    background-color: #454545;
    color: #F1F1F1;
}

.add-to-cart-cont {
    display: flex;
    /* height: 97px; */
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0%;
    width: 100%;
}

span.stocks-left {
    font-size: 12px;
    padding: 5px;
    width: 40%;
}

.add-to-cart-cont>svg {
    width: 50%;
    /* display: flex; */
    /* align-items: end; */
    /* justify-content: end; */
    position: relative;
    right: -10%;
    cursor: pointer;
}

.add-to-cart-cont>svg:hover {
    /* fill: #454545; */
    stroke: #FAA400;
}
</style>