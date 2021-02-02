/* Calculate MAN BMR */
(function () {
    function calculatemanBMR(manWeight, manHeight, manAge) {
        manWeight = parseFloat(manWeight);
        manHeight = parseFloat(manHeight);
        manAge = parseFloat(manAge);
        return ((manWeight * 10) + (manHeight * 6.25) - (manAge *5) + 5);
    }

    var manBMR = document.getElementById("manBMR");
    if (manBMR) {
        manBMR.onsubmit = function () {
            this.result.value = calculatemanBMR(this.manWeight.value, this.manHeight.value, this.manAge.value);
            return false;
        };
    }
}());



/* Calculate Woman BMR */
(function () {
    function calculatewomanBMR(womanWeight, womanHeight, womanAge) {
        womanWeight = parseFloat(womanWeight);
        womanHeight = parseFloat(womanHeight);
        womanAge = parseFloat(womanAge);
        return ((womanWeight * 10) + (womanHeight * 6.25) - (womanAge *5) - 161);
    }

    var womanBMR = document.getElementById("womanBMR");
    if (womanBMR) {
        womanBMR.onsubmit = function () {
            this.result.value = calculatewomanBMR(this.womanWeight.value, this.womanHeight.value, this.womanAge.value);
            return false;
        };
    }
}());

/* Macros to calories calculator */
(function () {
    function MacrosToCalories(proteins, carbs, fats) {
        proteins = parseFloat(proteins);
        carbs = parseFloat(carbs);
        fats = parseFloat(fats);
        return ((proteins * 4) + (carbs * 4) + (fats * 9));
    }

    var calculateMacros = document.getElementById("calculateMacros");
    if (calculateMacros) {
        calculateMacros.onsubmit = function () {
            this.result.value = MacrosToCalories(this.proteins.value, this.carbs.value, this.fats.value);
            return false;
        };
    }
}());