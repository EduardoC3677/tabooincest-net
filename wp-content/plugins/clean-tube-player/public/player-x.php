	<html>
	<head>
		<meta name="robots" content="noindex">
		<base target="_parent" />
					<style>
		.fluid_initial_play:hover {
			-webkit-box-shadow: 0px 0px 40px 5px #261AE0;  /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
			-moz-box-shadow:    0px 0px 40px 5px #261AE0;  /* Firefox 3.5 - 3.6 */
			box-shadow:         0px 0px 40px 5px #261AE0;  /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
		}
	</style>
	
<style>
	#video_fluid_state_button,
	#video_fluid_initial_play {
		width: 100px !important;
		height: 100px !important;
	}
	.wps-player__happy-inside-btn-close {
		background-color: #261AE0;
		color: #fff;
	}

	.wps-player__happy-inside-btn-close {
		border-color: #261AE0!important;
		color: #fff;
	}

	@keyframes lds-double-ring {
	0% {
		-webkit-transform: rotate(0);
		transform: rotate(0);
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
	}
	@-webkit-keyframes lds-double-ring {
	0% {
		-webkit-transform: rotate(0);
		transform: rotate(0);
	}
	100% {
		-webkit-transform: rotate(360deg);
		transform: rotate(360deg);
	}
	}
	@keyframes lds-double-ring_reverse {
	0% {
		-webkit-transform: rotate(0);
		transform: rotate(0);
	}
	100% {
		-webkit-transform: rotate(-360deg);
		transform: rotate(-360deg);
	}
	}
	@-webkit-keyframes lds-double-ring_reverse {
	0% {
		-webkit-transform: rotate(0);
		transform: rotate(0);
	}
	100% {
		-webkit-transform: rotate(-360deg);
		transform: rotate(-360deg);
	}
	}
	.lds-double-ring {
		position: relative;
	}
	.lds-double-ring div {
		position: absolute;
		width: 80px;
		height: 80px;
		top: 10px;
		left: 10px;
		border-radius: 50%;
		border: 2px solid #000;
		border-color: #261AE0 transparent #261AE0 transparent;
		-webkit-animation: lds-double-ring 1.3s linear infinite;
		animation: lds-double-ring 1.3s linear infinite;
	}

	.lds-double-ring div:nth-child(2) {
		width: 70px;
		height: 70px;
		top: 15px;
		left: 15px;
		border-color: transparent #ffffff transparent #ffffff;
		-webkit-animation: lds-double-ring_reverse 1.3s linear infinite;
		animation: lds-double-ring_reverse 1.3s linear infinite;
	}
	.lds-double-ring {
		width: 100px !important;
		height: 100px !important;
		-webkit-transform: translate(-50px, -50px) scale(1) translate(50px, 50px);
		transform: translate(-50px, -50px) scale(1) translate(50px, 50px);
	}

</style>

		<style>
			body {
				color: white;
				background: #000;
				position: absolute;
				margin: 0px;
				height: 100%;
				width: 100%;
			}

			.wps-iframe-loader {
				position: absolute;
				top:0;
				display: flex;
				justify-content: center;
				width: 100%;
				height:100%;
				background: rgb(0,0,0);
				z-index: 5;
			}

			.wps-iframe-loader--inner-block {
				position: absolute;
				top: calc(50% - 60px);
				display: flex;
				flex-direction: column;
				align-self: center;
				justify-self: center;
				text-align: center;
				color: #777;
			}

			.vast_video_loading {
				position: absolute;
			}
		</style>
	</head>
	<body>
	
		<div class="wps-iframe-loader">
			<div class="wps-iframe-loader--inner-block">
				<div style="width:100%;height:100%" class="wps-iframe-loader--icon lds-double-ring"><div></div><div></div></div>
				<span class="wps-iframe-loader--text">Load video</span>
			</div>
		</div>

	<div class="wps-player"><div class="wps-player-block"><video id="video" class="" controls preload="auto" width="100%" height="100%" poster="https://tabooincest.net/wp-content/uploads/2026/04/Screenshot_2026-04-15-17-00-26-78_965bbf4d18d205f782c6b8409c5773a42-640x360.jpg"><source src="https://files.catbox.moe/ugccbr.mp4" label="720p" title="720p" type="video/mp4"></source><source src="https://qu.ax/0ao6g.mp4" label="480p" title="480p" type="video/mp4"></source></video></div></div>		<link rel="stylesheet" href="https://tabooincest.net/wp-content/plugins/clean-tube-player/public/assets/css/ctpl-player.css?ver=2.8.0.1771958406">
		<script src="https://tabooincest.net/wp-content/plugins/clean-tube-player/public/vendors/jquery-3.4.1.slim.min.js?ver=3.4.1"></script>
		<script src="https://tabooincest.net/wp-content/plugins/clean-tube-player/public/vendors/fluidplayer-3.55.0.min.js?ver=3.55.0"></script>

		<script type="text/javascript">
		jQuery(document).ready(function() {
			var vastTimeout = 10000;
			var _videoId = 'video';
			var _$video = jQuery('#' + _videoId);

			_$video.on('mouseover', function() {
				jQuery(this).css('cursor', 'auto');
			});

			/** On button click click. Close ad + play video if exists.*/
			jQuery("body").on("click", ".wps-player__happy-inside-btn-close", function() {
				var $happyInsidePlayer = jQuery(".wps-player__happy-inside");
				$happyInsidePlayer.hide(300);
				var $video = jQuery('#' + _videoId)[0];
				if (undefined !== $video) {
					$video.play();
				}
			});

			if (0 !== _$video.length) {
				setupFluidPlayer(_videoId, _$video);
			}

			/**
			 * Setup fluidPlayer
			 *
			 * @param string videoId
			 */
			function setupFluidPlayer(videoId, $video) {
				var ctplOptions = {
					primaryColor: "#261AE0",
					autoPlay: 'on' === "off",
					allowDownload: 'on' === "off" && '' === "",
					preRoll: "https://s.magsrv.com/v1/vast.php?idzone=5085438",
					midRoll: "https://s.magsrv.com/v1/vast.php?idzone=4901114",
					midRollTimer: "50"
				};

				/** Add basic fluidPlayer options dynamically.*/
				var fluidPlayerOptions = {
					layoutControls: {
						fillToContainer: true,
						primaryColor: ctplOptions.primaryColor,
						posterImage: $video.attr( 'poster' ),
						autoPlay: ctplOptions.autoPlay,
						playButtonShowing: true,
						playPauseAnimation: true,
						mute: false,
						keyboardControl: true,
						allowDownload: ctplOptions.allowDownload,
						allowTheatre: false,
						playbackRateEnabled: true,
						controlBar: {
							autoHide: true,
							autoHideTimeout: 3,
							animated: true
						},
						playerInitCallback: ( function() {
							jQuery( '.wps-player__happy-inside--start' ).show(300);
						})
					}
				};

				/** Add vast List options dynamically.*/
				var vastListArray = [];
				if (ctplOptions.preRoll) {
					vastListArray.push({
						"roll": "preRoll",
						"vastTag": ctplOptions.preRoll
					});
				}
				if (ctplOptions.midRoll && ctplOptions.midRollTimer) {
					vastListArray.push({
						"roll": "midRoll",
						"vastTag": ctplOptions.midRoll,
						"timer": ctplOptions.midRollTimer + '%'
					});
				}
				var inVast = false;
				if (vastListArray) {
					fluidPlayerOptions.vastOptions = {
						vastTimeout: vastTimeout,
						adList: vastListArray
					};
				}
				/** FluidPlayer Init.*/
				var videoPlayer = fluidPlayer(videoId, fluidPlayerOptions);

				/** FluidPlayer On pause event.*/
				videoPlayer.on("pause", function() {
					if ( inVast ) {
						return;
					}
					$video.addClass('paused');
					$video.parents('.wps-player').addClass('paused').find(".wps-player__happy-inside--pause").show(300);
				});

				/** FluidPlayer On play event.*/
				videoPlayer.on("play", function() {
					$video.removeClass('paused');
					$video.parents('.wps-player').removeClass('paused').find(".wps-player__happy-inside--start").hide(300);
				});
			}
		});
		</script>
	</body>
	</html>
	