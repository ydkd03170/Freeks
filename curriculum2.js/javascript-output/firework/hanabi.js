let fwcol = [
    "#ffdd55",
    "#ff6622",
    "#2255ff",
    "#44ff44",
    ];
    
    class Zanzo
    {
        constructor(x,y,c)
        {
            this.col=c;
            this.x=x;
            this.y=y;
            this.c =10;
            this.kill=false;
        }
        
        update()
        {
            if(this.kill)return;
            if(--this.c==0)this.kill=true;
        }
        
        draw()
        {
            if(this.kill)return;
            
            con.globalAlpha=1.0 * this.c /10;
            con.fillStyle=fwcol[this.col];
            con.fillRect((this.x>>8),(this.y>>8),2,2);
        }
    }
    
    
    class Hanabi
    {
        constructor(x,y,ca,vx,vy,gv,tp,hp)
        {
            this.col=ca;
            this.x=x;
            this.y=y;
            this.vx=vx;
            this.vy=vy;
            this.kill=false;
            this.gv = gv;
            if(tp==undefined)tp=0;
            this.tp=tp;
            if(hp==undefined)hp=100;
            this.hp=hp;
            this.sp=100;
        }
        
        update()
        {
            if(this.kill)return;
            this.x +=this.vx*this.sp/100;
            this.y +=this.vy*this.sp/100;
            this.vy+=this.gv;
            
            if(this.x>>8 <0 || this.x>>8 >SCREEN_SIZE_W ||
                this.y>>8 > SCREEN_SIZE_H )this.kill=true;
            
            if(this.tp==0 && this.vy>=0 )
            {
                this.kill=true;
                
                for(let i=0;i<200;i++)
                {
                    let r=rand(0,360);
                    let s=rand(10,300);
                    let vx=Math.cos(r*Math.PI/180)*s;
                    let vy=Math.sin(r*Math.PI/180)*s;
                    hanabi.push(
                        new Hanabi( this.x,this.y,this.col,vx,vy,1,1,200) 
                    );
                }
                let col=rand(0,3);
                for(let i=0;i<100;i++)
                {
                    let r=rand(0,360);
                    let s=rand(300,400);
                    let vx=Math.cos(r*Math.PI/180)*s;
                    let vy=Math.sin(r*Math.PI/180)*s;
                    hanabi.push(
                        new Hanabi( this.x,this.y,col,vx,vy,1,1,200) 
                    );
                }
                
            }
            if(this.tp==1)
            {
                this.hp--;
                if(this.hp<100)
                {
                    if(this.sp)this.sp--;
                }
                if(this.hp==0)this.kill=true;
            }
        }
        
        draw()
        {
            if(this.tp>0 && rand(0,100)<80 )return;
            if(this.tp==0 && rand(0,100)<20 )return;
            if(this.kill)return;
            
            con.globalAlpha=1.0;
            if(this.hp<50)con.globalAlpha=this.hp/50;
            let col=this.col;
            if(this.tp==0)col=0;
            con.fillStyle=fwcol[col];
            con.fillRect(this.x>>8,this.y>>8,2,2);
            con.globalAlpha=0.5;
            con.fillRect((this.x>>8)-1,(this.y>>8),4,2);
            con.fillRect((this.x>>8),(this.y>>8)-1,2,4);
            zanzo.push(
                new Zanzo( this.x,this.y,col) 
            );
        }
    }
    
    