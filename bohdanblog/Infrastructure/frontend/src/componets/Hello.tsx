import * as React from 'react';

export interface Props {
    name: string,
    enthusiasmLevel?: number
}

function Hello({name, enthusiasmLevel = 1}: Props) {
    if (enthusiasmLevel <= 0) {
        throw new Error("You could be more enthusiastic :D");
    }

    return (
        <div className="hello">
            <div className="greeting">
                Hello {name + getExclamationMarks(enthusiasmLevel)}
            </div>
        </div>
    );
}

export default Hello;

function getExclamationMarks(amountOfChars: number): string {
    return Array(amountOfChars + 1).join('!');
}