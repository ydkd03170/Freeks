function main() {
    if(!(WINDOW_WIDTH == 1920 || WINDOW_HEIGHT == 969)) {
        window.alert("You must resize window {innerWidth: 1920, innerHeight: 969}\nYou need to open window size: 1920*1080");
        return;
    } else {
        //自分生成
        create_my_character();
        count_timer();

        //20~70を生成
        let size = Math.floor(Math.random() * 51) + 20;                      
        //敵生成
        let move_speed = 1;
        create_canvas(size, size, 1500, 350, move_speed);
    }
}
let canvas = document.createElement("canvas");
canvas.style.position = "absolute";
let canvas_context = canvas.getContext("2d");
let rgb = {
    r: Math.floor(Math.random() * 256),
    g: Math.floor(Math.random() * 256),
    b: Math.floor(Math.random() * 256),
};
canvas_context.fillStyle = `rgb(${rgb.r},${rgb.g},${rgb.b})`;
canvas_context.beginPath();
canvas_context.arc(width / 2, height / 2, width / 2, Math.PI*2, false);
canvas_context.fill();
main_field.appendChild(canvas);
let add_speed = 0.001;

function up_way(){
    if(top > 0 && up_way_flag == false) {
        top -= move_speed;
        canvas.style.top = top + "px";
    } else {
        move_speed += add_speed;
        up_way_flag = true;
        down_way_flag = false;
        down_way();
    }
}
let main_interval = setInterval(() => {
    let my_character = document.getElementById("my_character");
    let m_left = parseInt(my_character.style.left);
    let m_top  = parseInt(my_character.style.top);
    let m_width = parseInt(my_character.width);
    let m_height = parseInt(my_character.height);

    if(
        left + width    >= m_left             &&
        left            <= m_left + m_width   &&
        top + height    >= m_top              &&
        top             <= m_top + m_height
    ) {
        setTimeout(() => {my_character.style.visibility = "hidden";},  100);
        setTimeout(() => {my_character.style.visibility = "visible";}, 200);
        setTimeout(() => {my_character.style.visibility = "hidden";},  300);
        setTimeout(() => {my_character.style.visibility = "visible";}, 400);
        setTimeout(() => {my_character.style.visibility = "hidden";},  500);
        setTimeout(() => {my_character.style.visibility = "visible";}, 600);

        clearInterval(main_interval);   
        main_field.removeChild(canvas);  
        gameover_message();
    }

    up_way();
    left_way();

}, 1);
let left_button = 37;
let top_button = 38;
let right_button = 39;
let bottom_button = 40;
let left_val = parseInt(canvas.style.left);
let top_val  = parseInt(canvas.style.top);
addEventListener("keydown", (e) => {
    switch(e.keyCode) {
        case left_button:
                if(left_val > 0) {
                    left_val -= 50;
                    canvas.style.left = left_val + "px";
                }
                break;
        case top_button:
                if(top_val > 0) {
                    top_val -= 50;
                    canvas.style.top = top_val + "px";
                }
                break;
        case right_button:
                if(left_val + 50 + 20 < WINDOW_WIDTH) {
                    left_val += 50;
                    canvas.style.left = left_val + "px";
                } 
                break;
        case bottom_button:
                if(top_val + 50 + 20 < WINDOW_HEIGHT) {
                    top_val += 50;
                    canvas.style.top = top_val + "px";
                }
                break;       
    }
});
function count_timer() {
    //...
    //...
    let sec = 0;
    let min = 0;
    TIMER = setInterval(() => {
        sec++;  
        if(sec < 10) {
            sec = "0" + sec;
        }
        if(sec > 59) {
            sec = "0" + 0;
            min++;
            if(min < 10) {
                min = "0" + min;
            }
        }
        if(min >= 60) {
            clearInterval(TIMER);
        }
        p_tag.textContent = min + ":" + sec;
    }, 1000);
}
function gameover_message() {
    //...
    //...
    document.getElementById("timer").style.visibility = "visible";
    clearInterval(TIMER);

    setTimeout(() => {
        main_field.removeChild(document.getElementById('my_character'));
    }, 5000);
}