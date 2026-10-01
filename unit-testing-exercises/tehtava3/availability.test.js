import { canFulfillOrder } from "./availability.js";

describe("canFulfillOrder", () => {
    test("returns true when stock is enough", () => {
        const result = canFulfillOrder(10, 3);

        expect(result).toBe(true);
    });

    test("returns false when stock is not enough", () => {
        const result = canFulfillOrder(2, 5);

        expect(result).toBe(false);
    });

    test("returns true when stock equals ordered quantity", () => {
        const result = canFulfillOrder(10, 10);

        expect(result).toBe(true);
    });

    test("returns true when ordered quantity is zero", () => {
        const result = canFulfillOrder(10, 0);

        expect(result).toBe(true);
    });
});
