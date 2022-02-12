//@ts-check
let numbers = [2,5,12,13,15,18,22];

function isEven(numbers) {
    if(numbers % 2 === 0) {
    console.log(numbers + "は偶数です");
    }
    else {
        ;
    }
}

class Car {
    constructor(gasoline, number) {
        this.gasoline = gasoline;
        this.number = number;
    }

    getNumGas() {
        console.log(`ガソリンは${this.gasoline}です。ナンバーは${this.number}です`);
    }
}

let Honda = new Car("○○", "△△")
Honda.getNumGas();