function diagonalTraversal(matrix) {
    const n = matrix.length;


    for (let col = n - 1; col >= 0; col--) {
        for (let i = 0, j = col; j < n; i++, j++) {
            process.stdout.write(matrix[i][j] + " ");
        }
        console.log();
    }


    for (let row = 1; row < n; row++) {
        for (let i = row, j = 0; i < n; i++, j++) {
            process.stdout.write(matrix[i][j] + " ");
        }
        console.log();
    }
}


const matrix = [
    [0, 1, 2, 3, 4],
    [5, 6, 7, 8, 9],
    [10, 11, 12, 13, 14],
    [15, 16, 17, 18, 19],
    [20, 21, 22, 23, 24]
];


diagonalTraversal(matrix);