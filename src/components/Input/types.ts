interface options extends Object{
    label: string; 
    value: string;
}

export interface IInput extends React.InputHTMLAttributes<HTMLInputElement>{
    leftIcon?: React.ReactNode;
    name: string;
    control: any;
    errorMessage?: string;
    options?: options[];
}