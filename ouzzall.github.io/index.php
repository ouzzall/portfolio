<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>ABDAY</title>
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <script src="https://unpkg.com/react@latest/umd/react.development.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/react-dom@latest/umd/react-dom.development.js"></script>
    <script src="https://unpkg.com/@mui/material@latest/umd/material-ui.development.js"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@babel/standalone@latest/babel.min.js" crossorigin="anonymous"></script>
    <!-- Fonts to support Material Design -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- Icons to support Material Design -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
</head>

<body>
    <div id="root"></div>
    <script type="text/babel">
        const {
            colors,
            CssBaseline,
            ThemeProvider,
            Typography,
            Container,
            createTheme,
            Box,
            SvgIcon,
            Link,
        } = MaterialUI;

        // Create a theme instance.
        const theme = createTheme({
            palette: {
                primary: {
                    main: '#556cd6',
                },
                secondary: {
                    main: '#19857b',
                },
                error: {
                    main: colors.red.A400,
                },
            },
        });

        function LightBulbIcon(props) {
            return (
                <SvgIcon {...props}>
                    <path d="M9 21c0 .55.45 1 1 1h4c.55 0 1-.45 1-1v-1H9v1zm3-19C8.14 2 5 5.14 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.86-3.14-7-7-7zm2.85 11.1l-.85.6V16h-4v-2.3l-.85-.6C7.8 12.16 7 10.63 7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 1.63-.8 3.16-2.15 4.1z" />
                </SvgIcon>
            );
        }

        function ProTip() {
            return (
                <Typography sx={{ mt: 6, mb: 3, color: 'text.secondary', textAlign: "center" }}>
                    <LightBulbIcon sx={{ mr: 1, verticalAlign: 'middle' }} />
                    Ah, playing chess alone, the ultimate showdown between genius and solitude
                </Typography>
            );
        }

        function Copyright() {
            return (
                <Typography variant="body2" color="text.secondary" align="center">
                    {'Copyright © '}
                    <Link color="inherit" href="https://mui.com/">
                        ABDAY
                    </Link>{' '}
                    {new Date().getFullYear()}
                    {'.'}
                </Typography>
            );
        }

        function App() {
            return (
                <Container maxWidth="md">
                    <Box sx={{ my: 4 }}>
                        <Typography variant="h4" component="h1" sx={{ mb: 2, textAlign: "center" }}>
                            ABDAY
                        </Typography>
                        <ProTip />
                        <Copyright />
                    </Box>
                </Container>
            );
        }

        const root = ReactDOM.createRoot(document.getElementById('root'));
        root.render(
            <ThemeProvider theme={theme}>
                {/* CssBaseline kickstart an elegant, consistent, and simple baseline to build upon. */}
                <CssBaseline />
                <App />
            </ThemeProvider>,
        );
    </script>
</body>

</html>