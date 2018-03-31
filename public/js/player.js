var nova_video = document.querySelector(".main-video");
var video_body = document.querySelector(".video-body");
var btn_play =document.getElementById("play");

btn_play.addEventListener('click', play);
function play() { 
	this.style.display = "none"
	video_body.className = " bg_video";
	nova_video.style.cursor = "pointer"
    nova_video.autoplay = true;
    nova_video.load();
    nova_video.addEventListener('click', pause)	 

}

function pause() { 
	btn_play.style.display = "block";
	video_body.className = " bg_video";
	this.style.cursor = "default";
    this.autoplay = false;
    this.pause = true;
    this.load();
    window.addEventListener('click', close);

}
function close() { 
	btn_play.style.display = "block";
	video_body.className = "video-body";
	nova_video.style.cursor = "pointer";
    nova_video.autoplay = false;
    nova_video.pause = true;
    nova_video.load();
}