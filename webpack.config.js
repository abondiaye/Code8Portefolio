const Encore = require('@symfony/webpack-encore');

// Configurez l'environnement d'exécution
Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');

Encore
    .setOutputPath('public/build/')
    .setPublicPath('/build')


    // Points d'entrée principaux
    .addEntry('app', './assets/js/app.js')
    .addStyleEntry('app_style', './assets/css/app.scss')

    // Points d'entrée spécifiques pour différentes pages
    .addEntry('contact', './assets/js/contact.js')
    .addStyleEntry('contact_style', './assets/css/contact.scss')

    .addEntry('footer', './assets/js/footer.js')
    .addStyleEntry('footer_style', './assets/css/footer.scss')

    .addEntry('formation', './assets/js/formation.js')
    .addStyleEntry('formation_style', './assets/css/formation.scss')

    .addEntry('index', './assets/js/index.js')
    .addStyleEntry('index_style', './assets/css/index.scss')

    .addEntry('portefolio', './assets/js/portefolio.js')
    .addStyleEntry('portefolio_style', './assets/css/portefolio.scss')

    .addEntry('project', './assets/js/project.js')
    .addStyleEntry('project_style', './assets/css/project.scss')

    .addStyleEntry('styles', './assets/css/styles.scss') // Si c'est un style global

    // Autres configurations
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enableSassLoader()
    .autoProvidejQuery()
;

module.exports = Encore.getWebpackConfig();
