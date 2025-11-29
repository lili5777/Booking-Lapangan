<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#F75270',
                    'primary-dark': '#D93F5C',
                    'primary-light': '#FF6B85',
                    secondary: '#3A86FF',
                    accent: '#FFD166',
                    dark: '#1A1A2E',
                    'dark-light': '#2D3047',
                    success: '#06D6A0'
                },
                fontFamily: {
                    'poppins': ['Poppins', 'sans-serif'],
                },
                animation: {
                    'float': 'float 6s ease-in-out infinite',
                    'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    'bounce-slow': 'bounce 3s infinite',
                    'spin-slow': 'spin 8s linear infinite',
                    'wiggle': 'wiggle 1s ease-in-out infinite',
                    'shuttle-fly': 'shuttleFly 2s ease-in-out infinite',
                    'glow': 'glow 2s ease-in-out infinite alternate',
                },
                keyframes: {
                    float: {
                        '0%, 100%': { transform: 'translateY(0px)' },
                        '50%': { transform: 'translateY(-20px)' },
                    },
                    wiggle: {
                        '0%, 100%': { transform: 'rotate(-3deg)' },
                        '50%': { transform: 'rotate(3deg)' },
                    },
                    shuttleFly: {
                        '0%': { transform: 'translateX(-100px) rotate(-45deg)' },
                        '50%': { transform: 'translateX(100px) rotate(0deg)' },
                        '100%': { transform: 'translateX(-100px) rotate(-45deg)' },
                    },
                    glow: {
                        'from': { boxShadow: '0 0 20px -10px #F75270' },
                        'to': { boxShadow: '0 0 20px 5px #F75270' },
                    }
                }
            }
        }
    }
</script>

<style>
    .gradient-bg {
        background: linear-gradient(135deg, #F75270 0%, #FF8DA1 100%);
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .card-hover {
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .card-hover:hover {
        transform: translateY(-15px) scale(1.03);
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
    }

    .nav-scroll {
        backdrop-filter: blur(20px);
        background: rgba(247, 82, 112, 0.95);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .shuttlecock {
        animation: float 4s ease-in-out infinite;
        filter: drop-shadow(0 10px 8px rgba(0, 0, 0, 0.2));
    }

    .badminton-net {
        position: relative;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, #fff 50%, transparent 100%);
        margin: 20px 0;
    }

    .badminton-net:before {
        content: '';
        position: absolute;
        top: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 4px;
        height: 16px;
        background: #fff;
    }

    .floating-element {
        animation: float 6s ease-in-out infinite;
    }

    .parallax-bg {
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .text-gradient {
        background: linear-gradient(135deg, #eeffa8 0%, #FFD166 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .btn-glow {
        box-shadow: 0 0 20px rgba(247, 82, 112, 0.5);
        transition: all 0.3s ease;
    }

    .btn-glow:hover {
        box-shadow: 0 0 30px rgba(247, 82, 112, 0.8);
        transform: translateY(-3px);
    }

    .pulse-dot {
        animation: pulse 2s infinite;
    }

    .typewriter {
        overflow: hidden;
        border-right: .15em solid #F75270;
        white-space: nowrap;
        margin: 0 auto;
        letter-spacing: .15em;
        animation: typing 3.5s steps(40, end), blink-caret .75s step-end infinite;
    }

    @keyframes typing {
        from {
            width: 0
        }

        to {
            width: 100%
        }
    }

    @keyframes blink-caret {

        from,
        to {
            border-color: transparent
        }

        50% {
            border-color: #F75270;
        }
    }

    .morph-shape {
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        animation: morph 8s ease-in-out infinite;
    }

    @keyframes morph {
        0% {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        }

        50% {
            border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
        }

        100% {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
        }
    }

    .stagger-animation>* {
        opacity: 0;
        transform: translateY(30px);
    }
</style>