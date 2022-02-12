function createjuice(fruit) {
    console.log(fruit + "を受け取りました。ジュースにして返します");
    let orangeJuice = createjuice('orange');
    console.log( orangeJuice + "が届きました");
    return fruit + "ジュース";
}