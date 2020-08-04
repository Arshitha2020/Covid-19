<style type="text/css">
*{
  margin: 0;
  padding : 0;
  box-sizing:border-box;
  font-family: 'Mulish', sans-serif;
}
span.navbar-toggler-icon{
  color: white;
  
}
.nav_style{
  background-color: rgb(32,178,170)!important;
}
.nav_style a{
  color: white;
}

.main_header{
  height:450px; 
  width: 100%;

}

.rightside h1{
  font-size: 3rem;

}

.corona_rot img{
  animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
  0%{ transform : rotate(0);}
  100%{ transform : rotate(360deg);}
}

.leftside img{
  animation: heartbeat 5s linear infinite;
}

@keyframes heartbeat
{
  0% {
    transform:  scale(0.75);
  }
  20% {
    transform:  scale(1);
  }
  40% {
    transform:  scale(0.75);
  }
  60% {
    transform:  scale(1);
  }
  80% {
    transform:  scale(0.75);
  }
  100% {
    transform:  scale(1);
  }
}
}

.corona_update{
  margin-right: 0 0 30px 0;
}

.corona_update h3{
  color: #ff7675;
}
.corona_update h1{
  font-size: 2rem; 
  text-align: center;
}


.sub_section{
  background-color:#fbfafd;
}


.footer_style{
  background-color: rgb(32,178,170)!important;
}
.footer_style p{ 
  margin-bottom: 0!important;
}
</style>
