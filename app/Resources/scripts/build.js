({
    findNestedDependencies: true,
    optimize: "uglify2",
    uglify2: {
        output: {
            beautify: false
        },
        compress: {
            sequences: true,
            global_defs: {
                DEBUG: false
            }
        },
        warnings: true,
        mangle: true
    }
})
