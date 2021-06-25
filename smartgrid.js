const smartgrid = require('smart-grid');

smartgrid('./css/layout', {
    mobileFirst: false,
    columns: 24,
    offset: "40px",
    outputStyle: "scss",
    container: {
        maxWidth: "1200px",
        fields: "20px",
    },
    breakPoints: {
        xlg: {
            width: "1919.98px",
            fields: "20px",
        },
        lg: {
            width: "1199.98px",
            fields: "20px",
            offset: "10px",
        },
        md: {
            width: "991.98px",
            fields: "20px",
            offset: "10px",
        },
        sm: {
            width: "767.98px",
            fields: "10px",
            offset: "10px",
        },
        xs: {
            width: "575.98px",
            fields: "10px",
            offset: "10px",
        }
    },
});