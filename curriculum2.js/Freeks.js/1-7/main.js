class Taiyaki {
    constructor(content) {
        this.content = content;
    }
    taste() {
        console.log(`中身は${this.content}です`);
    }
}

let anko = new Taiyaki("あんこ");
anko.taste();
let cream = new Taiyaki("クリーム");
cream.taste();
let cheese = new Taiyaki("チーズ");
cheese.taste();
