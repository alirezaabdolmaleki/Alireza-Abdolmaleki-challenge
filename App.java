public class Main {
    public static void main(String[] args) {
        int[][] matrix = {
            {0, 1, 2, 3, 4},
            {5, 6, 7, 8, 9},
            {10, 11, 12, 13, 14},
            {15, 16, 17, 18, 19},
            {20, 21, 22, 23, 24}
        };

        int n = matrix.length;

        for (int col = n - 1; col >= 0; col--) {
            for (int i = 0, j = col; j < n; i++, j++) {
                System.out.print(matrix[i][j] + " ");
            }
            System.out.println();
        }

        for (int row = 1; row < n; row++) {
            for (int i = row, j = 0; i < n; i++, j++) {
                System.out.print(matrix[i][j] + " ");
            }
            System.out.println();
        }
    }
}