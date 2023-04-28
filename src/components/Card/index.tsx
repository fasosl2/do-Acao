import React from "react";
import { FiThumbsUp } from "react-icons/fi";

import {
  CardContainer,
  Content,
  HasInfo,
  ImageBackground,
  PostInfo,
  UserInfo,
  UserPicture,
} from "./styles";
import { ILibrary } from "../../@types/ILibrary";

const Card = ({id, name, address, latitude, longitude, ...rest}: ILibrary) => {
  return (
    <CardContainer>
      <Content>
        <UserInfo>
          {/* <UserPicture src="https://avatars.githubusercontent.com/u/66625225?v=4" /> */}
          <div>
            <h4>{name}</h4>
          </div>
        </UserInfo>
        <PostInfo>
          <h5>{address}</h5>
        </PostInfo>
        <HasInfo>
          <p>
            <FiThumbsUp />
            10
          </p>
        </HasInfo>
      </Content>
    </CardContainer>
  );
};

export { Card };
