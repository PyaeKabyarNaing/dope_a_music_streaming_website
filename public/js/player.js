const audioElement = document.getElementById("audio-player");
const audioCover = document.getElementById("audio-cover");
const audioTitle = document.getElementById("audio-title");
const audioArtist = document.getElementById("audio-artist");

const player = {
    audio: audioElement,
    playlist: [],
    currentIndex: 0,

    loadSongs(songs) {
        this.playlist = songs;
        this.currentIndex = 0;
        if (songs.length > 0) {
            this.playCurrent();
        }
    },

    playCurrent() {
        const song = this.playlist[this.currentIndex];
        if (!song) return;

        // Update UI with proper cover image fallback
        if (song.cover_image) {
            audioCover.src = `/storage/${song.cover_image}`;
        } else if(window.albumData && window.albumData.album && window.albumData.album.cover_image) {
            audioCover.src = `/storage/${window.albumData.album.cover_image}`;
        }
        else {
            audioCover.src = `/images/default-cover.jpg`;
        }
        
        audioTitle.textContent = song.name;
        audioArtist.textContent = song.artist_name;

        // Play audio - make sure file_url exists in your songs
        if (song.audio_file) {
            this.audio.src = song.audio_file.startsWith('http') ? song.audio_file : `/storage/${song.audio_file}`;
            this.audio.play().catch(e => {
                console.log("Auto-play prevented:", e);
                // User interaction might be required for auto-play
            });
        }

        // Dispatch event for other components to listen to
        window.dispatchEvent(new CustomEvent("songChanged", { detail: song }));
    },

    playSongAt(index) {
        if (index >= 0 && index < this.playlist.length) {
            this.currentIndex = index;
            this.playCurrent();
        }
    },

    next() {
        if (this.currentIndex < this.playlist.length - 1) {
            this.currentIndex++;
            this.playCurrent();
        }
    },

    previous() {
        if (this.currentIndex > 0) {
            this.currentIndex--;
            this.playCurrent();
        }
    }
};

// Auto play next song when current ends
player.audio.addEventListener("ended", () => {
    player.next();
});

// Make player globally available
window.player = player;