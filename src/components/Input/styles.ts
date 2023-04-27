import styled from "styled-components";

export const InputContainer = styled.div`
  width: 100%;
  min-width: 275px;
  minn-height: 30px;
  border-bottom: 1px solid #3b3450;

  display: flex;
  align-items: center;
  margin-bottom: 20px;
`;

export const IconContainer = styled.div`
  margin-right: 10px;
`;

export const InputText = styled.input`
  background-color: transparent;
  color: #000;
  width: 100%;
  border: 0;
  height: 30px;
  &:focus{
    border: none;
    outline: none;
  }
`;

export const InputTextArea = styled.textarea`
  background-color: transparent;
  height: ${props => (String(props?.value)?.split('\n')?.length*18+18)}px;
  display: block;
  box-sizing: padding-box;
  overflow: hidden;
  width: 100%;
  resize: none;
  font-size: 16px;
  margin: 10px auto;
  border-radius: 6px;
  box-shadow: 2px 2px 8px rgba(black, 0.3);
  border: 0;

  &:focus{
    border: none;
    outline: none;
  }
`;
export const ErrorText = styled.div`
  color: #ff000b;
  font-size: 12px;
  margin: 5px 0;
`;


export const RadioRow = styled.div`
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    margin: 0px 15px;
`;