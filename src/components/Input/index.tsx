import React from "react";

import { Controller } from "react-hook-form";

import { IconContainer, InputContainer, InputItem, ErrorText, InputTextArea, RadioRow } from "./styles";
import { IInput } from "./types";
const Input = ({ leftIcon, name, control, errorMessage, type, options, ...rest}: IInput) => {
  return (
    <Controller
      name={name}
      control={control}
      rules={{ required: true }}
      render={({ field: { value, onChange } }) => (<>
        {type === "radio" ? 
          (<RadioRow>
              {
              options?.map(option => (<>
                <InputItem name={name} type={type} value={option?.value} onChange={onChange} {...rest} />
                  <label>{option?.label}</label>
              </>
              ))
              }
          </RadioRow>)
          :
          type ===  "textarea"? 
          (<InputContainer>
              {leftIcon ? <IconContainer>{leftIcon}</IconContainer> : null}
              <InputTextArea  value={value} onInput={onChange} />
            </InputContainer>) :
            (<InputContainer>
                {leftIcon ? <IconContainer>{leftIcon}</IconContainer> : null}
                <InputItem value={value} onChange={onChange} {...rest} />
              </InputContainer>)
        }
        {errorMessage ? <ErrorText>{errorMessage}</ErrorText> : null}
        </>)
    }
    />
  );
};

export { Input };
