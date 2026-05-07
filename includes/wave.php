<style>
    .wave {
        position: absolute;
        bottom: 0;
        width: 100%;
        line-height: 0;
        z-index: 2;
    }

    .wave svg {
        width: 100%;
        height: 160px;
        display: block;
        transform: scaleY(-1);
        transform-origin: center;
    }

    .wave1 {
        fill: rgba(227, 244, 250, 0.7);
    }

    .wave2 {
        fill: #f8f9fa;
    }

    .wave path {
        filter: drop-shadow(0 -5px 10px rgba(0, 0, 0, 0.1));
    }
</style>

<div class="wave">
    <svg viewBox="0 0 1440 320" preserveAspectRatio="none">
        <path class="wave1">
            <animate attributeName="d" dur="10s" repeatCount="indefinite"
                values="
      M0,0L1440,0L1440,160C1320,180,1200,200,1080,190C960,180,840,140,720,130C600,120,480,140,360,160C240,180,120,220,0,240Z;
      M0,0L1440,0L1440,140C1320,120,1200,100,1080,110C960,120,840,160,720,180C600,200,480,200,360,180C240,160,120,140,0,120Z;
      M0,0L1440,0L1440,160C1320,180,1200,200,1080,190C960,180,840,140,720,130C600,120,480,140,360,160C240,180,120,220,0,240Z">
            </animate>
        </path>

        <path class="wave2">
            <animate attributeName="d" dur="14s" repeatCount="indefinite"
                values="
      M0,0L1440,0L1440,200C1200,220,1000,180,800,160C600,140,400,160,200,180C100,190,50,200,0,210Z;
      M0,0L1440,0L1440,180C1200,150,1000,130,800,140C600,150,400,200,200,220C100,230,50,210,0,190Z;
      M0,0L1440,0L1440,200C1200,220,1000,180,800,160C600,140,400,160,200,180C100,190,50,200,0,210Z">
            </animate>
        </path>
    </svg>
</div>